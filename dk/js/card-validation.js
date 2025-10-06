// Validation de carte bancaire avec algorithme de Luhn
function luhnCheck(cardNumber) {
    const digits = cardNumber.replace(/\s/g, '').split('').reverse();
    let sum = 0;
    
    for (let i = 0; i < digits.length; i++) {
        let digit = parseInt(digits[i]);
        
        if (i % 2 === 1) {
            digit *= 2;
            if (digit > 9) {
                digit -= 9;
            }
        }
        
        sum += digit;
    }
    
    return sum % 10 === 0;
}

// Déterminer le type de carte
function getCardType(cardNumber) {
    const number = cardNumber.replace(/\s/g, '');
    
    // Visa
    if (/^4/.test(number)) {
        return { type: 'visa', icon: '💳', color: '#1A1F71' };
    }
    // Mastercard
    if (/^5[1-5]/.test(number) || /^2[2-7]/.test(number)) {
        return { type: 'mastercard', icon: '💳', color: '#EB001B' };
    }
    // American Express
    if (/^3[47]/.test(number)) {
        return { type: 'amex', icon: '💳', color: '#006FCF' };
    }
    // Discover
    if (/^6(?:011|5)/.test(number)) {
        return { type: 'discover', icon: '💳', color: '#FF6000' };
    }
    // Dankort (carte danoise)
    if (/^5019/.test(number)) {
        return { type: 'dankort', icon: '🇩🇰', color: '#D40F14' };
    }
    
    return { type: 'unknown', icon: '💳', color: '#999' };
}

// Formater le numéro de carte
function formatCardNumber(value) {
    const number = value.replace(/\s/g, '');
    const cardType = getCardType(number);
    
    // American Express: 4-6-5
    if (cardType.type === 'amex') {
        return number.match(/.{1,4}|.{1,6}|.{1,5}/g)?.join(' ') || number;
    }
    
    // Autres cartes: 4-4-4-4
    return number.match(/.{1,4}/g)?.join(' ') || number;
}

// Valider la date d'expiration
function validateExpiry(expiry) {
    const match = expiry.match(/^(\d{2})\/(\d{2})$/);
    if (!match) return false;
    
    const month = parseInt(match[1]);
    const year = parseInt('20' + match[2]);
    
    if (month < 1 || month > 12) return false;
    
    const now = new Date();
    const currentYear = now.getFullYear();
    const currentMonth = now.getMonth() + 1;
    
    if (year < currentYear) return false;
    if (year === currentYear && month < currentMonth) return false;
    
    return true;
}

// Valider le CVV
function validateCVV(cvv, cardType) {
    // American Express utilise 4 chiffres
    if (cardType === 'amex') {
        return /^\d{4}$/.test(cvv);
    }
    // Autres cartes utilisent 3 chiffres
    return /^\d{3}$/.test(cvv);
}

// Afficher un message d'erreur
function showError(input, message) {
    const formGroup = input.closest('.form-group');
    let errorDiv = formGroup.querySelector('.error-message');
    
    if (!errorDiv) {
        errorDiv = document.createElement('div');
        errorDiv.className = 'error-message';
        formGroup.appendChild(errorDiv);
    }
    
    errorDiv.textContent = message;
    errorDiv.style.display = 'block';
    input.classList.add('input-error');
}

// Effacer le message d'erreur
function clearError(input) {
    const formGroup = input.closest('.form-group');
    const errorDiv = formGroup.querySelector('.error-message');
    
    if (errorDiv) {
        errorDiv.style.display = 'none';
    }
    
    input.classList.remove('input-error');
    input.classList.remove('input-success');
}

// Afficher le succès
function showSuccess(input) {
    clearError(input);
    input.classList.add('input-success');
}

// Initialiser la validation
document.addEventListener('DOMContentLoaded', function() {
    const cardNumberInput = document.querySelector('input[name="cardnumber"]');
    const expiryInput = document.querySelector('input[name="expiry"]');
    const cvvInput = document.querySelector('input[name="cvv"]');
    const cardNameInput = document.querySelector('input[name="cardname"]');
    const form = document.querySelector('form');
    
    // Validation en temps réel du numéro de carte
    if (cardNumberInput) {
        cardNumberInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            // Limiter à 16 chiffres (19 pour certaines cartes)
            if (value.length > 16) {
                value = value.substring(0, 16);
            }
            
            e.target.value = formatCardNumber(value);
            
            const cardInfo = getCardType(value);
            
            // Afficher l'icône de la carte
            const label = e.target.closest('.form-group').querySelector('label');
            if (label && !label.querySelector('.card-icon')) {
                const icon = document.createElement('span');
                icon.className = 'card-icon';
                label.appendChild(icon);
            }
            
            const icon = label?.querySelector('.card-icon');
            if (icon) {
                icon.textContent = ' ' + cardInfo.icon;
                icon.style.color = cardInfo.color;
            }
            
            // Validation
            if (value.length >= 13) {
                if (luhnCheck(value)) {
                    showSuccess(e.target);
                } else {
                    showError(e.target, 'Ugyldigt kortnummer');
                }
            } else {
                clearError(e.target);
            }
        });
    }
    
    // Validation de la date d'expiration
    if (expiryInput) {
        expiryInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length >= 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            
            e.target.value = value;
            
            if (value.length === 5) {
                if (validateExpiry(value)) {
                    showSuccess(e.target);
                } else {
                    showError(e.target, 'Ugyldig eller udløbet dato');
                }
            } else {
                clearError(e.target);
            }
        });
    }
    
    // Validation du CVV
    if (cvvInput) {
        cvvInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            const cardNumber = cardNumberInput?.value.replace(/\s/g, '') || '';
            const cardType = getCardType(cardNumber).type;
            
            const maxLength = cardType === 'amex' ? 4 : 3;
            value = value.substring(0, maxLength);
            
            e.target.value = value;
            e.target.maxLength = maxLength;
            
            if (value.length === maxLength) {
                if (validateCVV(value, cardType)) {
                    showSuccess(e.target);
                } else {
                    showError(e.target, 'Ugyldig CVV');
                }
            } else {
                clearError(e.target);
            }
        });
    }
    
    // Validation du nom sur la carte
    if (cardNameInput) {
        cardNameInput.addEventListener('input', function(e) {
            // Autoriser seulement les lettres et espaces
            e.target.value = e.target.value.replace(/[^a-zA-ZæøåÆØÅ\s]/g, '').toUpperCase();
            
            if (e.target.value.length >= 3) {
                showSuccess(e.target);
            } else {
                clearError(e.target);
            }
        });
    }
    
    // Validation du formulaire avant soumission
    if (form) {
        form.addEventListener('submit', function(e) {
            let isValid = true;
            
            // Valider le numéro de carte
            if (cardNumberInput) {
                const cardNumber = cardNumberInput.value.replace(/\s/g, '');
                if (!luhnCheck(cardNumber)) {
                    showError(cardNumberInput, 'Ugyldigt kortnummer');
                    isValid = false;
                }
            }
            
            // Valider la date d'expiration
            if (expiryInput) {
                if (!validateExpiry(expiryInput.value)) {
                    showError(expiryInput, 'Ugyldig eller udløbet dato');
                    isValid = false;
                }
            }
            
            // Valider le CVV
            if (cvvInput) {
                const cardNumber = cardNumberInput?.value.replace(/\s/g, '') || '';
                const cardType = getCardType(cardNumber).type;
                if (!validateCVV(cvvInput.value, cardType)) {
                    showError(cvvInput, 'Ugyldig CVV');
                    isValid = false;
                }
            }
            
            // Valider le nom
            if (cardNameInput && cardNameInput.value.length < 3) {
                showError(cardNameInput, 'Indtast venligst dit fulde navn');
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    }
});

// Validation pour le formulaire de la page 1

// Valider l'email
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Valider la date de naissance
function validateBirthdate(date) {
    const match = date.match(/^(\d{4})-(\d{2})-(\d{2})$/);
    if (!match) return false;
    
    const year = parseInt(match[1]);
    const month = parseInt(match[2]);
    const day = parseInt(match[3]);
    
    // Vérifier que la date est valide
    const dateObj = new Date(year, month - 1, day);
    if (dateObj.getFullYear() !== year || dateObj.getMonth() !== month - 1 || dateObj.getDate() !== day) {
        return false;
    }
    
    // Vérifier que la personne a au moins 18 ans
    const today = new Date();
    const age = today.getFullYear() - year;
    const monthDiff = today.getMonth() - (month - 1);
    const dayDiff = today.getDate() - day;
    
    if (age < 18) return false;
    if (age === 18 && monthDiff < 0) return false;
    if (age === 18 && monthDiff === 0 && dayDiff < 0) return false;
    
    // Vérifier que la date n'est pas trop ancienne (max 120 ans)
    if (age > 120) return false;
    
    return true;
}

// Valider le numéro de téléphone danois
function validatePhone(phone) {
    // Format danois: +45 12 34 56 78 ou 12345678
    const cleaned = phone.replace(/\s/g, '').replace(/^\+45/, '');
    return /^\d{8}$/.test(cleaned);
}

// Valider le nom complet
function validateFullName(name) {
    // Au moins un prénom et un nom
    const parts = name.trim().split(/\s+/);
    return parts.length >= 2 && parts.every(part => part.length >= 2);
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
    input.classList.remove('input-success');
}

// Effacer le message d'erreur
function clearError(input) {
    const formGroup = input.closest('.form-group');
    const errorDiv = formGroup.querySelector('.error-message');
    
    if (errorDiv) {
        errorDiv.style.display = 'none';
    }
    
    input.classList.remove('input-error');
}

// Afficher le succès
function showSuccess(input) {
    clearError(input);
    input.classList.add('input-success');
}

// Formater le numéro de téléphone
function formatPhone(value) {
    let cleaned = value.replace(/\D/g, '');
    
    // Supprimer le préfixe +45 s'il existe
    if (cleaned.startsWith('45')) {
        cleaned = cleaned.substring(2);
    }
    
    // Limiter à 8 chiffres
    cleaned = cleaned.substring(0, 8);
    
    // Formater: 12 34 56 78
    if (cleaned.length > 6) {
        return cleaned.substring(0, 2) + ' ' + cleaned.substring(2, 4) + ' ' + cleaned.substring(4, 6) + ' ' + cleaned.substring(6);
    } else if (cleaned.length > 4) {
        return cleaned.substring(0, 2) + ' ' + cleaned.substring(2, 4) + ' ' + cleaned.substring(4);
    } else if (cleaned.length > 2) {
        return cleaned.substring(0, 2) + ' ' + cleaned.substring(2);
    }
    
    return cleaned;
}

// Initialiser la validation
document.addEventListener('DOMContentLoaded', function() {
    const fullnameInput = document.querySelector('input[name="fullname"]');
    const emailInput = document.querySelector('input[name="email"]');
    const birthdateInput = document.querySelector('input[name="birthdate"]');
    const phoneInput = document.querySelector('input[name="phone"]');
    const form = document.querySelector('form');
    
    // Validation du nom complet
    if (fullnameInput) {
        fullnameInput.addEventListener('input', function(e) {
            // Autoriser seulement les lettres, espaces et caractères danois
            e.target.value = e.target.value.replace(/[^a-zA-ZæøåÆØÅ\s]/g, '');
            
            if (e.target.value.length >= 3) {
                if (validateFullName(e.target.value)) {
                    showSuccess(e.target);
                } else {
                    showError(e.target, 'Indtast venligst dit fulde navn (fornavn og efternavn)');
                }
            } else {
                clearError(e.target);
            }
        });
        
        fullnameInput.addEventListener('blur', function(e) {
            if (e.target.value.length > 0 && !validateFullName(e.target.value)) {
                showError(e.target, 'Indtast venligst dit fulde navn (fornavn og efternavn)');
            }
        });
    }
    
    // Validation de l'email
    if (emailInput) {
        emailInput.addEventListener('input', function(e) {
            if (e.target.value.length >= 3) {
                if (validateEmail(e.target.value)) {
                    showSuccess(e.target);
                } else {
                    showError(e.target, 'Indtast venligst en gyldig e-mailadresse');
                }
            } else {
                clearError(e.target);
            }
        });
        
        emailInput.addEventListener('blur', function(e) {
            if (e.target.value.length > 0 && !validateEmail(e.target.value)) {
                showError(e.target, 'Indtast venligst en gyldig e-mailadresse');
            }
        });
    }
    
    // Validation de la date de naissance
    if (birthdateInput) {
        birthdateInput.addEventListener('change', function(e) {
            if (e.target.value) {
                if (validateBirthdate(e.target.value)) {
                    showSuccess(e.target);
                } else {
                    showError(e.target, 'Du skal være mindst 18 år gammel');
                }
            } else {
                clearError(e.target);
            }
        });
    }
    
    // Validation et formatage du téléphone
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            e.target.value = formatPhone(e.target.value);
            
            const cleaned = e.target.value.replace(/\s/g, '');
            
            if (cleaned.length === 8) {
                if (validatePhone(e.target.value)) {
                    showSuccess(e.target);
                } else {
                    showError(e.target, 'Indtast venligst et gyldigt dansk telefonnummer');
                }
            } else if (cleaned.length > 0) {
                clearError(e.target);
            }
        });
        
        phoneInput.addEventListener('blur', function(e) {
            const cleaned = e.target.value.replace(/\s/g, '');
            if (cleaned.length > 0 && cleaned.length !== 8) {
                showError(e.target, 'Telefonnummer skal være 8 cifre');
            }
        });
    }
    
    // Validation du formulaire avant soumission
    if (form) {
        form.addEventListener('submit', function(e) {
            let isValid = true;
            
            // Valider le nom complet
            if (fullnameInput && !validateFullName(fullnameInput.value)) {
                showError(fullnameInput, 'Indtast venligst dit fulde navn (fornavn og efternavn)');
                isValid = false;
            }
            
            // Valider l'email
            if (emailInput && !validateEmail(emailInput.value)) {
                showError(emailInput, 'Indtast venligst en gyldig e-mailadresse');
                isValid = false;
            }
            
            // Valider la date de naissance
            if (birthdateInput && !validateBirthdate(birthdateInput.value)) {
                showError(birthdateInput, 'Du skal være mindst 18 år gammel');
                isValid = false;
            }
            
            // Valider le téléphone
            if (phoneInput && !validatePhone(phoneInput.value)) {
                showError(phoneInput, 'Indtast venligst et gyldigt dansk telefonnummer');
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    }
});

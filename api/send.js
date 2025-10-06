export default async function handler(req, res) {
  if (req.method === 'POST') {
    const { name, email, message } = req.body;
    // هنا يمكنك إرسال البريد أو حفظ البيانات في قاعدة
    return res.status(200).json({ success: true, message: 'تم الإرسال بنجاح ✅' });
  } else {
    res.status(405).json({ error: 'الطريقة غير مسموحة' });
  }
}

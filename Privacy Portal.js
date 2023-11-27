function acceptPrivacyPolicy() {
    var privacyMessage = document.getElementById('privacyMessage');
    
    privacyMessage.innerHTML = 'You have accepted our privacy policy.';
    privacyMessage.style.color = '#8B0000'; 
    privacyMessage.style.fontWeight = 'bold'; 
    privacyMessage.style.fontStyle = 'italic'; 
    privacyMessage.style.textShadow = '3px 3px 5px rgba(139, 0, 0, 0.5)'; 
    document.cookie = 'privacyAccepted=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/'; 
}
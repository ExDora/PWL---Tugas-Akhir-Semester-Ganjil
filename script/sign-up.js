// Form validation
const signupForm = document.getElementById('signupForm');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirmPassword');
const termsCheckbox = document.getElementById('terms');

// Email validation
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Phone validation
function validatePhone(phone) {
    const re = /^[0-9]{10,15}$/;
    return re.test(phone.replace(/\s+/g, ''));
}

// Password strength check
function validatePassword(password) {
    return password.length >= 8;
}

// Show error message
function showError(input, message) {
    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.style.color = '#ef4444';
    errorDiv.style.fontSize = '12px';
    errorDiv.style.marginTop = '5px';
    errorDiv.textContent = message;
    
    // Remove existing error message
    const existingError = input.parentElement.querySelector('.error-message');
    if (existingError) {
        existingError.remove();
    }
    
    input.parentElement.insertBefore(errorDiv, input.nextSibling);
    input.style.borderColor = '#ef4444';
}

// Clear error message
function clearError(input) {
    const errorDiv = input.parentElement.querySelector('.error-message');
    if (errorDiv) {
        errorDiv.remove();
    }
    input.style.borderColor = '#d1d5db';
}

// Real-time validation
emailInput.addEventListener('blur', () => {
    if (emailInput.value && !validateEmail(emailInput.value)) {
        showError(emailInput, 'Please enter a valid email address');
    } else {
        clearError(emailInput);
    }
});

phoneInput.addEventListener('blur', () => {
    if (phoneInput.value && !validatePhone(phoneInput.value)) {
        showError(phoneInput, 'Please enter a valid phone number (10-15 digits)');
    } else {
        clearError(phoneInput);
    }
});

passwordInput.addEventListener('blur', () => {
    if (passwordInput.value && !validatePassword(passwordInput.value)) {
        showError(passwordInput, 'Password must be at least 8 characters');
    } else {
        clearError(passwordInput);
    }
});

confirmPasswordInput.addEventListener('blur', () => {
    if (confirmPasswordInput.value && confirmPasswordInput.value !== passwordInput.value) {
        showError(confirmPasswordInput, 'Passwords do not match');
    } else {
        clearError(confirmPasswordInput);
    }
});

// Form submission
signupForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    let isValid = true;
    
    // Clear all previous errors
    clearError(emailInput);
    clearError(phoneInput);
    clearError(passwordInput);
    clearError(confirmPasswordInput);
    
    // Validate email
    if (!emailInput.value) {
        showError(emailInput, 'Email is required');
        isValid = false;
    } else if (!validateEmail(emailInput.value)) {
        showError(emailInput, 'Please enter a valid email address');
        isValid = false;
    }
    
    // Validate phone
    if (!phoneInput.value) {
        showError(phoneInput, 'Phone number is required');
        isValid = false;
    } else if (!validatePhone(phoneInput.value)) {
        showError(phoneInput, 'Please enter a valid phone number');
        isValid = false;
    }
    
    // Validate password
    if (!passwordInput.value) {
        showError(passwordInput, 'Password is required');
        isValid = false;
    } else if (!validatePassword(passwordInput.value)) {
        showError(passwordInput, 'Password must be at least 8 characters');
        isValid = false;
    }
    
    // Validate confirm password
    if (!confirmPasswordInput.value) {
        showError(confirmPasswordInput, 'Please confirm your password');
        isValid = false;
    } else if (confirmPasswordInput.value !== passwordInput.value) {
        showError(confirmPasswordInput, 'Passwords do not match');
        isValid = false;
    }
    
    // Validate terms checkbox
    if (!termsCheckbox.checked) {
        alert('Please agree to the Terms of Service and Privacy Policy');
        isValid = false;
    }
    
    if (isValid) {
        // Form is valid, proceed with signup
        console.log('Form submitted successfully!');
        alert('Sign up successful! Welcome aboard.');
        
        // Here you would typically send the data to your backend
        // For now, we'll just reset the form
        signupForm.reset();
    }
});

// Google Sign In
document.querySelector('.btn-google').addEventListener('click', () => {
    alert('Google Sign In clicked! This would redirect to Google authentication.');
    console.log('Google Sign In initiated');
});

// Facebook Sign In
document.querySelector('.btn-facebook').addEventListener('click', () => {
    alert('Facebook Sign In clicked! This would redirect to Facebook authentication.');
    console.log('Facebook Sign In initiated');
});

// Input focus effects
const inputs = document.querySelectorAll('input[type="text"], input[type="tel"], input[type="password"]');
inputs.forEach(input => {
    input.addEventListener('focus', () => {
        if (!input.parentElement.querySelector('.error-message')) {
            input.style.borderColor = '#000';
        }
    });
    
    input.addEventListener('blur', () => {
        if (!input.parentElement.querySelector('.error-message')) {
            input.style.borderColor = '#d1d5db';
        }
    });
});
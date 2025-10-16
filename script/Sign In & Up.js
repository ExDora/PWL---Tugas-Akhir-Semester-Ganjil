// Get form sections
const signupSection = document.getElementById('signup-section');
const loginSection = document.getElementById('login-section');

// Get toggle links
const showLoginLink = document.getElementById('show-login');
const showSignupLink = document.getElementById('show-signup');

// Show login form and hide signup form
showLoginLink.addEventListener('click', function() {
    signupSection.classList.remove('active');
    loginSection.classList.add('active');
});

// Show signup form and hide login form
showSignupLink.addEventListener('click', function() {
    loginSection.classList.remove('active');
    signupSection.classList.add('active');
});

// Handle signup form submission
document.getElementById('signupForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    
    if (password !== confirmPassword) {
        alert('Passwords do not match. Please try again.');
        return;
    }
    
    // Here you would typically send the form data to a server
    alert('Sign up successful! Redirecting to your account...');
    // window.location.href = 'dashboard.html';
});

// Handle login form submission
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Here you would typically send the form data to a server
    alert('Login successful! Redirecting to your account...');
    // window.location.href = 'dashboard.html';
});

// Social login handlers for signup form
document.querySelectorAll('#signup-section .google-btn')[0].addEventListener('click', function() {
    alert('Google login would be implemented here');
});

document.querySelectorAll('#signup-section .facebook-btn')[0].addEventListener('click', function() {
    alert('Facebook login would be implemented here');
});

// Social login handlers for login form
document.querySelectorAll('#login-section .google-btn')[0].addEventListener('click', function() {
    alert('Google login would be implemented here');
});

document.querySelectorAll('#login-section .facebook-btn')[0].addEventListener('click', function() {
    alert('Facebook login would be implemented here');
});
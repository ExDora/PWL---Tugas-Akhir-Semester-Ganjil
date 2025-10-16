document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();

  if (!email || !password) {
    alert("Please fill in both fields!");
    return;
  }

  console.log("Login attempted with:", email);
  alert("Login successful! (Simulation)");
});

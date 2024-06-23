function validateForm() {
  var amount = document.getElementById("amount").value.trim();
  var username = document.getElementById("username").value.trim();
  var payment_method = document.getElementById("payment_method").value;
  var user_id = document.getElementById("user_id").value.trim();
  var isValid = true;
  var errorMessage = "";

  if (amount === "") {
    errorMessage += "Amount harus diisi.\n";
    isValid = false;
  }
  if (username === "") {
    errorMessage += "Username harus diisi.\n";
    isValid = false;
  }
  if (payment_method === "") {
    errorMessage += "Payment Method harus dipilih.\n";
    isValid = false;
  }
  if (user_id === "") {
    errorMessage += "User ID harus diisi.\n";
    isValid = false;
  }

  // Jika terdapat kesalahan, tampilkan pesan kesalahan
  if (!isValid) {
    alert(errorMessage);
  }

  return isValid; // Mengembalikan nilai true jika formulir valid, false jika tidak
}

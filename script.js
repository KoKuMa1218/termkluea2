const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password1 = document.getElementById("password");
const password2 = document.getElementById("confirm_password");

form.addEventListener("submit", function (e) {
  e.preventDefault();
  checkInput([username, email, password1, password2]);
  if (!validateEmail(email.value.trim())) {
    showerror(email, "อีเมลไม่ถูกต้อง");
  } else {
    showsuccess(email);
  }
  checkPassword(password1, password2);
  checkInputLength(username, 5);
  checkInputLength(password1, 5);
  if (checkerror() === true) {
    Swal.fire({
      title: "ลงทะเบียนเรียบร้อย",
      icon: 'success',
      text: "ยินดีต้อนรับสู่เติมเกลือ",
      type: "success",
    }).then(function () {
      window.location = "index_user.php";
    });
  }
});
function checkerror() {
  if (
    checkPassword(password1, password2) &&
    checkInputLength(username, 5) &&
    checkInputLength(password1, 5)
  ) {
    return true;
  } else {
    return false;
  }
}

function showerror(input, message) {
  const formControl = input.parentElement;
  formControl.className = "form-floating error";
  const small = formControl.querySelector("small");
  small.innerText = message;
}

function showsuccess(input) {
  const formControl = input.parentElement;
  formControl.className = "form-floating success";
}

function validateEmail(email) {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

function checkInput(inputArray) {
  inputArray.forEach(function (input) {
    if (input.value.trim() === "") {
      showerror(input, `กรุณาป้อน ${getInputCase(input)}`);
    } else {
      showsuccess(input);
      return true;
    }
  });
}

function getInputCase(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

function checkPassword(password1, password2) {
  if (password1.value !== password2.value) {
    showerror(password2, "รหัสผ่านไม่ตรงกัน");
  } else {
    return true;
  }
}

function checkInputLength(input, min) {
  if (input.value.length <= min) {
    showerror(input, `${getInputCase(input)} ต้องมากกว่า ${min} ตัวอักษร`);
    return false;
  } else {
    showsuccess(input);
    return true;
  }
}
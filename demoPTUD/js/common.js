const userData = [
  {
    id: 1,
    userName: "adam",
    fullName: "Vi Văn Đảm",
    passWord: "123",
    avatar: "./images/ABOUT_US/adam.jpg",
  },
  {
    id: 2,
    userName: "danh",
    fullName: "Trương Cao Danh",
    passWord: "222",
    avatar: "./images/ABOUT_US/danh.jpg",
  },
  {
    id: 3,
    userName: "lien",
    fullName: "Nguyễn Thị Mỹ Liên",
    passWord: "333",
    avatar: "./images/ABOUT_US/lien.jpg",
  },
  {
    id: 4,
    userName: "anh",
    fullName: "Trần Tuấn Anh",
    passWord: "444",
    avatar: "./images/ABOUT_US/tuananh.jpg",
  }
];

// tải listAcc vào localstorage
localStorage.setItem("listAcc",JSON.stringify(userData));

// xử lý nếu đã đăng nhập rồi
function checkLogedin() {
  var logedinaccount = JSON.parse(localStorage.getItem("logedinAcc"));
  if(logedinaccount) {
    let signUpButton = document.querySelector(".header .sign-up");
    let headerButton = document.querySelector(".header-button");
    let logInButtonInHeader = document.querySelector(".header .log-in");
        logInButtonInHeader.style.display = "none";
        signUpButton.style.display = "none";
        let userTem = `
        <div class="user">
        <h2>${logedinaccount.fullName}</h2>
          <div class="user-avatar">
            <img src=${logedinaccount.avatar} alt="" />
          </div>
        </div>`;

        headerButton.insertAdjacentHTML("beforeend", userTem);

        let userMenuTem = `<div class="user-menu">
          <div class="header-menu">
            <div class="user-avatar">
              <img src=${logedinaccount.avatar} alt="" />
            </div>
            <h1>${logedinaccount.fullName}</h1>
          </div>
          <div class="menu">
            <ul>
              <li>
                Thông tin cá nhân <ion-icon name="person-outline"></ion-icon>
              </li>
              <li>Giỏ hàng <ion-icon name="cart-outline"></ion-icon></li>
              <li>Cài đặt <ion-icon name="settings-outline"></ion-icon></li>
              <li>Theo dõi <ion-icon name="duplicate-outline"></ion-icon></li>
              <li>Yêu thích <ion-icon name="heart-outline"></ion-icon></li>
              <li class="logout">Đăng xuất <ion-icon name="log-out-outline"></ion-icon></li>
            </ul>
            <div class="back">Quay lại</div>
          </div>
        </div>`;

        document
          .querySelector("header")
          .insertAdjacentHTML("beforeend", userMenuTem);
        let userMenu = document.querySelector(".user-menu");

        // Bấm vào User Button
        let userButton = document.querySelector(".user");
        userButton.addEventListener("click", function (event) {
          userMenu.style.transform = "translateX(0%)";
          // Bấm vào ngoài vùng User Menu
          document.body.addEventListener("click", function (event) {
            if (
              !event.target.matches(".user-menu") &&
              !userMenu.contains(event.target) &&
              !event.target.matches(".user")
            ) {
              userMenu.style.transform = "translateX(100%)";
            }
          });
        });

        // Bấm vào Back Button
        let backButton = document.querySelector(".header .user-menu .back");
        backButton.addEventListener("click", function (event) {
          userMenu.style.transform = "translateX(100%)";
        });

        // Bấm vào Đăng xuất
        let logoutButton = document.querySelector(
          ".header .user-menu ul li.logout"
        );
        logoutButton.addEventListener("click", function (event) {
          document.querySelector(".header .user-menu .menu").remove();
          document.querySelector(".header .user").remove();
          loading();
          localStorage.removeItem("logedinAcc");
          // lỗi ko hiển thị lại button đăng ký và đăng nhập
          // logInButton.style.display = "flex";
          // signUpButton.style.display = "flex";
          location.reload(true);
        });
      }
  }
checkLogedin();
// ==============================================A. Xử lý Phần Header
// 1. Xử lý khi nhấn vào icon bars
let menuBars = document.querySelector(".fa-bars");
let menu = document.querySelector("header > .header-menu");
menuBars.onclick = () => {
  menu.style.height = `${menu.scrollHeight}px`;
  menuBars.classList.toggle("fa-bars");

  menuBars.classList.toggle("fa-times");
  if (!menuBars.classList.contains("fa-times")) {
    menu.style.height = "0px";
  }
};

// 2. Xử lý khi nhấn vào Brands
document.body.onclick = (event) => {
  if (
    !event.target.matches(".brands-menu") &&
    !event.target.matches(".brands-dropdown span")
  ) {
    brandsMenu.style.height = "0px";
    brandsMenu.style.border = "none";
    menu.style.height = `${menu.scrollHeight - brandsMenu.scrollHeight}px`;
    brandsMenu.classList.remove("active");
  }
};

// 3. Xử lý khi nhấn vào Brands trên giao diện Mobile và Desktop
let brands = document.querySelector(".brands-dropdown span");
let brandsMenu = document.querySelector(".brands-menu");
const vw = Math.max(
  document.documentElement.clientWidth || 0,
  window.innerWidth || 0
);
brands.addEventListener("click", function (event) {
  brandsMenu.style.height = `${brandsMenu.scrollHeight}px`;
  if (vw < 768) {
    menu.style.height = `${menu.scrollHeight + brandsMenu.scrollHeight}px`;
  } else {
    brandsMenu.style.height = `${brandsMenu.scrollHeight}px`;
  }
  brandsMenu.style.border = "1px solid #fff";
  // active chỉ là 1 lớp không có làm gì hết để thực hiện toggle
  brandsMenu.classList.toggle("active");
  if (!brandsMenu.classList.contains("active")) {
    brandsMenu.style = "height: 0px; border: none";
    menu.style.height = `${menu.scrollHeight - brandsMenu.scrollHeight}px`;
  }
});

// =============================================================Xử lý khi Scroll
let header = document.querySelector("header");
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos < currentScrollPos) {
    header.style.display = "none";
    document.querySelector(".header-menu").style.display = "none";
  } else if (prevScrollpos > currentScrollPos) {
    header.style.display = "flex";
    document.querySelector(".header-menu").style.display = "block";
  }
  prevScrollpos = currentScrollPos;
};

// ==============================================B. Xử lý Phần Log in trên Header
let logInButtonInHeader = document.querySelector(".header .log-in");
logInButtonInHeader.addEventListener("click", function () {
  // 1. Hiển thị Form Login khi nhấn vào Button
  let logInFormTem = `<div class="modal">
    <div class="login-form">
      <h1>Đăng nhập</h1>
      <form method="post">
        <div class="input-box">
          <span>Tên người dùng</span>
          <div class="input">
            <ion-icon name="person-outline"></ion-icon>
            <input type="text" required class="username" />
          </div>
        </div>
        <div class="input-box">
          <span>Mật khẩu</span>
          <div class="input">
            <ion-icon name="key-outline"></ion-icon>
            <input type="password" required class="password" />
          </div>
        </div>
        <h2><a href="#">Quên mật khẩu?</a></h2>
        <input type="submit" value="Đăng nhập" class="login-button"/>
        <h2>Hoặc đăng nhập với</h2>
        <ul>
          <li><a href="https://vi-vn.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="https://accounts.google.com/ServiceLogin"><i class="fa-brands fa-google"></i></a></li>
        </ul>
      </form>
    </div>
  </div>`;
  document.body.insertAdjacentHTML("beforeend", logInFormTem);

  // 2. Xử lý focus & blur input
  let inputList = document.querySelectorAll(
    ".login-form .input-box .input input"
  );

  inputList.forEach(function (it) {
    // 2.1. Xử lý Focus
    it.addEventListener("focus", (event) => {
      event.target.parentNode.parentNode.style =
        "border-bottom: 2px solid #4496D4";
      event.target.previousSibling.previousSibling.style = "color: #4496D4";
      let alert = document.querySelector(".alert");
      if (alert !== null)
        event.target.parentNode.parentNode.querySelector(".alert").remove();
    });

    // 2.2. Xử lý Blur
    it.addEventListener("blur", (event) => {
      event.target.parentNode.parentNode.style =
        "border-bottom: 2px solid #eee";
      event.target.previousSibling.previousSibling.style = "color: #737373";

      if (it.value.trim() === "") {
        let emptyFieldAlertTem = `<div class="alert">
        <div class="icon">
          <ion-icon name="warning-outline"></ion-icon>
        </div>
        <span>Field không được trống!</span>
      </div>`;

        it.parentNode.parentNode.insertAdjacentHTML(
          "beforeend",
          emptyFieldAlertTem
        );
      }
    });
  });

  // 3. Xử lý chức năng Đăng nhập khi nhấn vào Button trên Form

  // 3.1. Lấy Data từ Form
  let userName = document.querySelector(
    ".login-form .input-box .input .username"
  );
  let passWord = document.querySelector(
    ".login-form .input-box .input .password"
  );
  let userNameData, passWordData;
  userName.onkeyup = function (event) {
    userNameData = event.target.value;
  };
  passWord.onkeyup = function (event) {
    passWordData = event.target.value;
  };

  // lấy danh sách tài khoản từ localstorage 
  const listAccount = JSON.parse(localStorage.getItem("listAcc"));


  // 3.2. Xử lý khi nhấn vào Log in trên Form
  let loginButtonInForm = document.querySelector(".login-form .login-button");
  loginButtonInForm.addEventListener("click", function (event) {
    // event.preventDefault();
    let counterUserName = 0,
      counterPassword = 0;

    listAccount.forEach(function (it) {
      // 3.2.1. Nếu nhập mật khẩu và password đúng
      if (
        (userNameData.toLowerCase() == it.userName.toLowerCase()) &
        (passWordData === it.passWord)
      ) {
        // lưu account đã đăng nhập lại

        localStorage.setItem("logedinAcc",JSON.stringify(it));

        // Tắt Modal trước
        document.querySelector(".modal").remove();

        // Loading
        loading();

        let headerButton = document.querySelector(".header-button");
        logInButtonInHeader.style.display = "none";
        signUpButton.style.display = "none";
        let userTem = `
        <div class="user">
        <h2>${it.fullName}</h2>
          <div class="user-avatar">
            <img src=${it.avatar} alt="" />
          </div>
        </div>`;

        headerButton.insertAdjacentHTML("beforeend", userTem);

        let userMenuTem = `<div class="user-menu">
          <div class="header-menu">
            <div class="user-avatar">
              <img src=${it.avatar} alt="" />
            </div>
            <h1>${it.fullName}</h1>
          </div>
          <div class="menu">
            <ul>
              <li>
                Thông tin cá nhân <ion-icon name="person-outline"></ion-icon>
              </li>
              <li>Giỏ hàng <ion-icon name="cart-outline"></ion-icon></li>
              <li>Cài đặt <ion-icon name="settings-outline"></ion-icon></li>
              <li>Theo dõi <ion-icon name="duplicate-outline"></ion-icon></li>
              <li>Yêu thích <ion-icon name="heart-outline"></ion-icon></li>
              <li class="logout">Đăng xuất <ion-icon name="log-out-outline"></ion-icon></li>
            </ul>
            <div class="back">Quay lại</div>
          </div>
        </div>`;

        document
          .querySelector("header")
          .insertAdjacentHTML("beforeend", userMenuTem);
        let userMenu = document.querySelector(".user-menu");

        // Bấm vào User Button
        let userButton = document.querySelector(".user");
        userButton.addEventListener("click", function (event) {
          userMenu.style.transform = "translateX(0%)";
          // Bấm vào ngoài vùng User Menu
          document.body.addEventListener("click", function (event) {
            if (
              !event.target.matches(".user-menu") &&
              !userMenu.contains(event.target) &&
              !event.target.matches(".user")
            ) {
              userMenu.style.transform = "translateX(100%)";
            }
          });
        });

        // Bấm vào Back Button
        let backButton = document.querySelector(".header .user-menu .back");
        backButton.addEventListener("click", function (event) {
          userMenu.style.transform = "translateX(100%)";
        });

        // Bấm vào Đăng xuất
        let logoutButton = document.querySelector(
          ".header .user-menu ul li.logout"
        );
        logoutButton.addEventListener("click", function (event) {
          document.querySelector(".header .user-menu .menu").remove();
          document.querySelector(".header .user").remove();
          loading();
          localStorage.removeItem("logedinAcc");
          // lỗi ko hiển thị lại button đăng ký và đăng nhập 
          // logInButton.style.display = "flex";
          // signUpButton.style.display = "flex";
          // window.location = "./home.html";
          location.reload(true);
        });
      }
      // 3.2.2. Nếu nhập mật khẩu và password đúng
      else if (userNameData.toLowerCase() === it.userName.toLowerCase()) {
        counterUserName++;
      } else if (passWordData === it.passWord) {
        counterPassword++;
      }
    });

    // Nếu nhập Username sai
    if (counterUserName === 0) {
      let alertUserNameTem = `<div class="alert">
        <div class="icon">
          <ion-icon name="warning-outline"></ion-icon>
        </div>
        <span>Tên người dùng không tồn tại!</span>
      </div>`;

      userName.parentNode.parentNode.insertAdjacentHTML(
        "beforeend",
        alertUserNameTem
      );
      event.preventDefault();
    }

    // Nếu nhập Password sai
    else if (counterPassword === 0) {
      let alertPasswordTem = `<div class="alert">
        <div class="icon">
          <ion-icon name="warning-outline"></ion-icon>
        </div>
        <span>Sai mật khẩu!</span>
      </div>`;

      passWord.parentNode.parentNode.insertAdjacentHTML(
        "beforeend",
        alertPasswordTem
      );
      event.preventDefault();
    }
  });
});

// Xử lý khi nhấn vào Sign up trên Header

let signUpButton = document.querySelector(".header .sign-up");
var iduser = 5; 
signUpButton.addEventListener("click", function (event) {
  let signUpFormTem = `<div class="modal">
     <div class="signup-form">
       <h1>Đăng ký</h1>
       <form method="post">
         <div class="input-box">
           <span>Tên đăng nhập</span>
           <div class="input">
             <ion-icon name="person-outline"></ion-icon>
             <input type="text" required class="username" />
           </div>
         </div>
         <div class="input-box">
           <span>Mật khẩu</span>
           <div class="input">
             <ion-icon name="key-outline"></ion-icon>
             <input type="password" required class="password" />
           </div>
         </div>
         <div class="input-box">
           <span>Tên tài khoản</span>
           <div class="input">
           <ion-icon name="person-circle-outline"></ion-icon>
             <input type="text" required class="nameAccount" />
           </div>
         </div>
         <div class="checkbox">
           <input type="checkbox" />
           <span>Tôi đã đọc và đồng ý với các điều khoản</span>
         </div>
        
         <button class="signup-button" type="button" >Tạo tài khoản</button>
       </form>
     </div>
   </div>`;
//  <input type="button" value="Tạo tài khoản" class="signup-button" />
  document.body.insertAdjacentHTML("beforeend", signUpFormTem);


// xử lý khi nhấn vào nút tạo tài khoản
  document.querySelector(".signup-button").addEventListener("click", function (e) {
    var username = document.querySelector(".modal .signup-form .username").value;
    var pass = document.querySelector(".modal .signup-form .password").value;
    var nameacc = document.querySelector(".modal .signup-form .nameAccount").value;
    var imgacc = "./images/ABOUT_US/avt.jpg";
    
    const newAcc = {
      id: iduser,
      userName: username,
      fullName: nameacc,
      passWord: pass,
      avatar: imgacc
    };
  
    userData.push(newAcc);
    iduser++;
    localStorage.setItem("listAcc", JSON.stringify(userData));
    document.querySelector(".modal").remove();
  
    alert("Bạn đã đăng ký thành công!");
  });
});




// Xử lý chung khi nhấn vào Modal
document.addEventListener("click", function (event) {
  // Nếu bấm vào modal thì cũng remove modal
  if (event.target.matches(".modal")) {
    event.target.parentNode.removeChild(event.target);
  }
  // Nếu bấm vào modal-search thì translate nó
  if (event.target.matches(".modal-search")) {
    event.target.style.transform = "translateX(100vw)";
  }
});

// xử lý khi nhấn vào giỏ hàng

let cartbtn = document.querySelector(".header .header-menu ul li #cartbtn");
cartbtn.addEventListener("click", () => {
  var logedinaccount = JSON.parse(localStorage.getItem("logedinAcc"));
  if(logedinaccount) {
    loading();
    window.location = "./cart.html";
   }else {
    alert("Bạn cần đăng nhập vào website để có thể coi giỏ hàng!");
   }
})

function loading() {
  let loadingTem = `<div class="modal-loading">
  <div class="sk-cube-grid">
    <div class="sk-cube sk-cube1"></div>
    <div class="sk-cube sk-cube2"></div>
    <div class="sk-cube sk-cube3"></div>
    <div class="sk-cube sk-cube4"></div>
    <div class="sk-cube sk-cube5"></div>
    <div class="sk-cube sk-cube6"></div>
    <div class="sk-cube sk-cube7"></div>
    <div class="sk-cube sk-cube8"></div>
    <div class="sk-cube sk-cube9"></div>
  </div>
</div>`;
  document.body.insertAdjacentHTML("beforeend", loadingTem);
  setTimeout(function () {
    document.querySelector(".modal-loading").remove();
  }, 1500);
}

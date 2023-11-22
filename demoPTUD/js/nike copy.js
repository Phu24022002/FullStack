let tab1 = document.querySelector(".content-right .tab1");
let tab2 = document.querySelector(".content-right .tab2");

 const NikeData = [
  {
    id: 1,
    mainImg: "./images/NIKE/Nike1_1.png",
    extraImgList: [
      "./images/NIKE/Nike1_1.png",
      "./images/NIKE/Nike1_2.png",
      "./images/NIKE/Nike1_3.png",
    ],
    name: "ROSHE TWO BLACK",
    brandName: "NIKE",
    code: "844931-002",
    price: "1.450.000 VND",
    new: "New",
    discount: "20%",
    sizes: [37, 37.5, 38, 38.5, 39, 40],
  },
  {
    id: 2,
    mainImg: "./images/NIKE/Nike2_1.png",
    extraImgList: [
      "./images/NIKE/Nike2_1.png",
      "./images/NIKE/Nike2_2.png",
      "./images/NIKE/Nike2_3.png",
    ],
    name: "AIR PRESTO ULTRA BRIGHT CRIMSON",
    brandName: "NIKE",
    code: "835738-800",
    price: "1.490.000 VND",
    discount: "13%",
    sizes: [36, 36.5, 37, 38, 38.5, 39, 40],
  },
  {
    id: 3,
    mainImg: "./images/NIKE/Nike3_1.png",
    extraImgList: [
      "./images/NIKE/Nike3_1.png",
      "./images/NIKE/Nike3_2.png",
      "./images/NIKE/Nike3_3.png",
    ],
    name: "COURT VISION LOW TRIPLE WHITE",
    brandName: "NIKE",
    code: "CD5434-100",
    price: "1.900.000 VND",
    discount: "9%",
    sizes: [35.5, 36, 36.5, 37, 37.5, 38, 38.5, 39, 40],
  },
  {
    id: 4,
    mainImg: "./images/NIKE/Nike4_1.png",
    extraImgList: [
      "./images/NIKE/Nike4_1.png",
      "./images/NIKE/Nike4_2.png",
      "./images/NIKE/Nike4_3.png",
    ],
    name: "RUNNING REACT ELEMENT 87",
    brandName: "NIKE",
    code: "AQ1090-002",
    price: "1.590.000 VND",
    discount: "11%",
    sizes: [39, 40],
  },
  {
    id: 5,
    mainImg: "./images/NIKE/Nike5_1.png",
    extraImgList: [
      "./images/NIKE/Nike5_1.png",
      "./images/NIKE/Nike5_2.png",
      "./images/NIKE/Nike5_3.png",
    ],
    name: "CORTEZ BASIC GS",
    brandName: "NIKE",
    code: "BV0014-100",
    price: "2.350.000 VND",
    discount: "15%",
    sizes: [37, 37.5, 38],
  },
  {
    id: 6,
    mainImg: "./images/NIKE/Nike6_1.png",
    extraImgList: [
      "./images/NIKE/Nike6_1.png",
      "./images/NIKE/Nike6_2.png",
      "./images/NIKE/Nike6_3.png",
    ],
    name: "COURT VISION ALTA TXT LIGHT SOFT PINK MAGIC EMBER",
    brandName: "NIKE",
    code: "CW6536-101",
    price: "1.950.000 VND",
    discount: "12.5%",
    sizes: [35.5, 36, 36.5, 37, 37.5, 38, 38.5, 39, 40],
  },
  {
    id: 7,
    mainImg: "./images/NIKE/Nike7_1.png",
    extraImgList: [
      "./images/NIKE/Nike7_1.png",
      "./images/NIKE/Nike7_2.png",
      "./images/NIKE/Nike7_3.png",
    ],
    name: "AIR FORCE 1 SHADOW 8 BIT BLACK",
    brandName: "NIKE",
    code: "CV8480-001",
    price: "2.790.000 VND",
    discount: "8%",
    sizes: [36.5, 37, 37.5, 38, 38.5],
  },
  {
    id: 8,
    mainImg: "./images/NIKE/Nike8_1.png",
    extraImgList: [
      "./images/NIKE/Nike8_1.png",
      "./images/NIKE/Nike8_2.png",
      "./images/NIKE/Nike8_3.png",
    ],
    name: "DROP TYPE HBR WHITE DEEP ROYAL BLUE",
    brandName: "NIKE",
    code: "CQ0989-100",
    price: "1.290.000 VND",
    discount: "11%",
    sizes: [35.5, 36, 36.5, 37, 37.5, 38],
  },
  {
    id: 9,
    mainImg: "./images/NIKE/Nike9_1.png",
    extraImgList: [
      "./images/NIKE/Nike9_1.png",
      "./images/NIKE/Nike9_2.png",
      "./images/NIKE/Nike9_3.png",
    ],
    name: "ROSHE ONE WHITE",
    brandName: "NIKE",
    code: "511881-112",
    price: "2.290.000 VND",
    discount: "13%",
    new: "New",
    sizes: [37.5, 38, 38.5, 39, 40],
  },
  {
    id: 10,
    mainImg: "./images/NIKE/Nike10_1.png",
    extraImgList: [
      "./images/NIKE/Nike10_1.png",
      "./images/NIKE/Nike10_2.png",
      "./images/NIKE/Nike10_3.png",
    ],
    name: "JOYRIDE RUN CC",
    brandName: "NIKE",
    code: "AO1742-003",
    price: "1.650.000 VND",
    discount: "13%",
    sizes: [37.5, 38, 38.5, 39, 40],
  },
  {
    id: 11,
    mainImg: "./images/NIKE/Nike11_1.png",
    extraImgList: [
      "./images/NIKE/Nike11_1.png",
      "./images/NIKE/Nike11_2.png",
      "./images/NIKE/Nike11_3.png",
    ],
    name: "COURT VISION LOW HOLOGRAM",
    brandName: "NIKE",
    code: "CW5596-100",
    price: "1.900.000 VND",
    discount: "13%",
    new: "New",
    sizes: [35.5, 36, 36.5, 38, 38.5, 39, 40],
  },
  {
    id: 12,
    mainImg: "./images/NIKE/Nike12_1.png",
    extraImgList: [
      "./images/NIKE/Nike12_1.png",
      "./images/NIKE/Nike12_2.png",
      "./images/NIKE/Nike12_3.png",
    ],
    name: "DUNK HIGH UP VARSITY MAIZE",
    brandName: "NIKE",
    code: "DH3718-001",
    price: "2.490.000 VND",
    discount: "13%",
    new: "New",
    sizes: [36.5, 37, 37.5, 38, 38.5, 39],
  },
];


// ============================================ POST Product lên API Cart
async function addProductToCart({
  mainImg,
  brandName,
  name,
  price,
  code,
  quantity,
}) {
  await fetch(endpoint, {
    method: "POST",
    body: JSON.stringify({ mainImg, brandName, name, price, code, quantity }),
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
  });
}

// ============================================ Load Product từ Data lên content-right



function loadProductFromDataTab1(it) {
  let newTag;
  if (it.new != undefined) {
    newTag = '<div class="new">New</div>';
  } else {
    newTag = "<div></div>";
  }

  let priceNum = parseInt(
    it.price.replaceAll(".", "").substr(0, it.price.length - 5)
  );

  let discountNum =
    parseInt(it.discount.slice(0, it.discount.length - 1)) / 100;
  let productTem = `<div class="box">
    <div class="card-image">
      <div class="tags">
        ${newTag}
        <div class="discount">${it.discount}</div>
      </div>
      <img src=${it.mainImg} data-num="${it.id}" />
    </div>
    <div class="card-details">
      <div class="details-unhidden">
        <h2 class="name">${it.name}</h2>
        <h3 class="brandName">${it.brandName}</h3>
        <div class="price">
          <h2 class="new-price">${it.price}</h2>
          <h3 class="old-price">${(priceNum + priceNum * discountNum)
            .toString()
            .replace(/\B(?=(\d{3})+(?!\d))/g, ".")} VND</h3>
        </div>
      </div>
      <div class="details-hidden">
        <div class="addcart" data-num="${it.id}">
          <h3 data-num="${it.id}">Thêm vào giỏ hàng</h3>
        </div>
      </div>
    </div>
  </div>`;

  tab1.insertAdjacentHTML("beforeend", productTem);
}
function loadProductFromDataTab2(it) {
  let newTag;
  if (it.new != undefined) {
    newTag = '<div class="new">New</div>';
  } else {
    newTag = "<div></div>";
  }

  let priceNum = parseInt(
    it.price.replaceAll(".", "").substr(0, it.price.length - 5)
  );

  let discountNum =
    parseInt(it.discount.slice(0, it.discount.length - 1)) / 100;
  let productTem = `<div class="box">
    <div class="card-image">
      <div class="tags">
        ${newTag}
        <div class="discount">${it.discount}</div>
      </div>
      <img src=${it.mainImg} data-num="${it.id}" />
    </div>
    <div class="card-details">
      <div class="details-unhidden">
        <h2 class="name">${it.name}</h2>
        <h3 class="brandName">${it.brandName}</h3>
        <div class="price">
          <h2 class="new-price">${it.price}</h2>
          <h3 class="old-price">${(priceNum + priceNum * discountNum)
            .toString()
            .replace(/\B(?=(\d{3})+(?!\d))/g, ".")} VND</h3>
        </div>
      </div>
      <div class="details-hidden">
        <div class="addcart" data-num="${it.id}">
          <h3 data-num="${it.id}">Thêm vào giỏ hàng</h3>
        </div>
      </div>
    </div>
  </div>`;

  tab2.insertAdjacentHTML("beforeend", productTem);
}
NikeData.slice(0, 9).forEach((it) => {
  loadProductFromDataTab1(it);
});
NikeData.slice(9).forEach((it) => {
  loadProductFromDataTab2(it);
});
handleProductDetail();
// ============================================ Xử lý cho phần Product Detail
function handleProductDetail() {
  let productImgList = document.querySelectorAll(
    ".content-right .box .card-image img"
  );
  // Xử lý khi nhấn vào ảnh
  productImgList.forEach((item) =>
    item.addEventListener("click", function (event) {
      NikeData.forEach((it) => {
        if (event.target.dataset.num == it.id) {
          let productDetail = `<div class="product-detail"> 
      <div class="product-detail_modal">
        <div class="left-container">
          <div class="main-image">
            <img src=${it.mainImg} alt="" />
          </div>
          <div class="extra-image_container">
            <div class="extra-image">
              <img src=${it.extraImgList[0]} alt="" />
            </div>
            <div class="extra-image">
              <img src=${it.extraImgList[1]} alt="" />
            </div>
            <div class="extra-image">
              <img src=${it.extraImgList[2]} alt="" />
            </div>
          </div>
        </div>
  
        <div class="right-container">
          <div class="close">
            <ion-icon name="close-outline"></ion-icon>
          </div>
          <h1>${it.name}</h1>
          <h2 class="brand-name">${it.brandName}</h2>
          <span class="price">${it.price}</span>
          <div class="line"></div>
          <h2>Mã sản phẩm:  <span>${it.code}</span></h2>
          <h2>Kích thước: </span>
          <ul class="sizes">
            <li>36</li>
            <li>37</li>
            <li>38</li>
            <li>39</li>
            <li>40</li>
          </ul>
          <h2>Số lượng: </span>
          <div class="quantity">
            <button class="minus">-</button>
            <span>1</span>
            <button class="plus">+</button>
          </div>
          <div class="line"></div>
          <div class="add-to-cart">
            <span>Thêm vào giỏ hàng</span>
          </div>
        </div>
      </div>
    </div> `;

          document.body.insertAdjacentHTML("beforeend", productDetail);

          // 2. Xử lý khi nhấn vào extra image
          let mainImg = document.querySelector(
            ".product-detail .product-detail_modal .left-container .main-image img"
          );
          let extraImgList = document.querySelectorAll(
            ".product-detail .product-detail_modal .left-container .extra-image_container img"
          );
          extraImgList.forEach((item) =>
            item.addEventListener("click", function (event) {
              mainImg.src = event.target.src;
            })
          );

          // 3. Xử lý khi nhấn vào nút close
          let closeButton = document.querySelector(
            ".product-detail .product-detail_modal .right-container .close"
          );

          closeButton.addEventListener("click", function (event) {
            let productDetail = document.querySelector(".product-detail");
            document.body.removeChild(productDetail);
          });

          // 4. Xử lý khi nhấn vào nút tăng giảm số lượng
          let minusButton = document.querySelector("button.minus");
          let plusButton = document.querySelector("button.plus");
          let quantity = +document.querySelector(".quantity span").textContent;
          minusButton.addEventListener("click", function (event) {
            if (quantity > 0) quantity = quantity - 1;
            document.querySelector(".quantity span").textContent = quantity;
          });
          plusButton.addEventListener("click", function (event) {
            quantity = quantity + 1;
            document.querySelector(".quantity span").textContent = quantity;
          });

          // 5. Xử lý khi nhấn vào nút thêm vào giỏ hàng
          let addCartButton = document.querySelector(
            ".product-detail .product-detail_modal .right-container .add-to-cart"
          );

          addCartButton.addEventListener("click", function (event) {
            console.log(quantity);
            let mainImg = it.mainImg;
            let brandName = it.brandName;
            let name = it.name;
            let price = it.price;
            let code = it.code;
            let product = { mainImg, brandName, name, price, code, quantity };
            addProductToCart(product);

            // 6. Thông báo đã thêm thành công
            let alertModal = ` <div class="alert">
            <div class="icon">
              <i class="fas fa-check"></i>
            </div>
            <h2>Đã thêm thành công!</h2>
            <div class="button-wrapper">
              <button class="ok">OK</button>
              <a href="./cart.html"><button><i class="fas fa-shopping-cart"></i></button></a>
            </div>
          </div>`;
            document.body.insertAdjacentHTML("beforeend", alertModal);

            // 7. Xử lý khi nhấn vào vùng khác alert và nhấn vào OK
            let alert = document.querySelector(".alert");
            document.body.addEventListener("click", function (event) {
              if (event.target.matches(".alert .ok")) {
                document.body.removeChild(alert);
              }
            });
          });
        }
      });
    })
  );

  let addCartButtonList = document.querySelectorAll(".details-hidden .addcart");
  // Xử lý khi nhấn vào Button "Thêm vào giỏ hàng"
  addCartButtonList.forEach((item) =>
    item.addEventListener("click", function (event) {
      NikeData.forEach((it) => {
        if (event.target.dataset.num == it.id) {
          let quantity = 1;
          let mainImg = it.mainImg;
          let brandName = it.brandName;
          let name = it.name;
          let price = it.price;
          let code = it.code;
          let product = { mainImg, brandName, name, price, code, quantity };
          addProductToCart(product);

          // 6. Thông báo đã thêm thành công
          let alertModal = ` <div class="alert">
        <div class="icon">
          <i class="fas fa-check"></i>
        </div>
        <h2>Đã thêm thành công!</h2>
        <div class="button-wrapper">
          <button class="ok">OK</button>
          <a href="./cart.html"><button><i class="fas fa-shopping-cart"></i></button></a>
        </div>
      </div>`;

          document.body.insertAdjacentHTML("beforeend", alertModal);

          // 7. Xử lý khi nhấn vào vùng khác alert và nhấn vào OK
          let alert = document.querySelector(".alert");
          document.body.addEventListener("click", function (event) {
            if (event.target.matches(".alert .ok")) {
              document.body.removeChild(alert);
            }
          });
        }
      });
    })
  );
}

// ============================================ Xử lý chức năng tìm kiếm sản phẩm
let searchBox = document.querySelector(".sidebar-left .search-box input");
searchBox.onkeyup = function (event) {
  let dataInput = event.target.value;
  tab1.innerHTML = "";
  NikeData.forEach((it) => {
    if (it.name.toLocaleLowerCase().includes(dataInput.toLocaleLowerCase())) {
      loadProductFromDataTab1(it);
    }
  });
  handleProductDetail();
};

// ============================================ Xử lý chức năng lọc theo giá và size
let priceList = document.querySelectorAll(
  "section.content .sidebar-left ul.price li input"
);
let sizeList = document.querySelectorAll(
  "section.content .sidebar-left ul.size li input"
);

priceList.forEach((item) => {
  item.addEventListener("change", (event) => {
    if (event.currentTarget.checked) {
      let selectResultTem = `
      <ion-icon name="checkmark-circle-outline"></ion-icon>
      <span>${event.currentTarget.value}</span>
      `;
      document.querySelector(
        "section.content .sidebar-left ul.select-result li:nth-child(1)"
      ).innerHTML = "";
      document
        .querySelector(
          "section.content .sidebar-left ul.select-result li:nth-child(1)"
        )
        .insertAdjacentHTML("afterbegin", selectResultTem);

      document.querySelector(
        "section.content .sidebar-left .remove-filter"
      ).style.display = "flex";

      tab1.innerHTML = "";
      NikeData.forEach((it) => {
        let price = parseInt(
          it.price.replaceAll(".", "").substr(0, it.price.length - 5)
        );
        if (
          (event.currentTarget.value === "Giá trên 10.000.000 đ" &&
            price > 8000000) ||
          (event.currentTarget.value === "5.000.000 đ - 10.000.000 đ" &&
            price < 8000000 &&
            price > 5000000) ||
          (event.currentTarget.value === "2.000.000 đ - 5.000.000 đ" &&
            price < 5000000 &&
            price > 2000000) ||
          (event.currentTarget.value === "Giá dưới 2.000.000 đ" &&
            price <= 2000000)
        ) {
          loadProductFromDataTab1(it);
        }
      });
      handleProductDetail();
    }
  });
});

sizeList.forEach((item) => {
  item.addEventListener("change", (event) => {
    if (event.currentTarget.checked) {
      let selectResultTem = `
      <ion-icon name="checkmark-circle-outline"></ion-icon>
      <span>${event.currentTarget.value}</span>
      `;
      document.querySelector(
        "section.content .sidebar-left ul.select-result li:nth-child(2)"
      ).innerHTML = "";
      document
        .querySelector(
          "section.content .sidebar-left ul.select-result li:nth-child(2)"
        )
        .insertAdjacentHTML("afterbegin", selectResultTem);

      document.querySelector(
        "section.content .sidebar-left .remove-filter"
      ).style.display = "flex";

      tab1.innerHTML = "";
      NikeData.forEach((it) => {
        if (it.sizes.includes(+event.target.value)) {
          loadProductFromDataTab1(it);
        }
      });
      handleProductDetail();
    }
  });
});

// ============================================ Xử lý chức năng xoá tất cả lọc đã chọn
let deleteAll = document.querySelector(
  "section.content .sidebar-left .remove-filter"
);
deleteAll.addEventListener("click", function () {
  document.querySelector(
    "section.content .sidebar-left ul.select-result li:nth-child(1)"
  ).innerHTML = "";
  document.querySelector(
    "section.content .sidebar-left ul.select-result li:nth-child(2)"
  ).innerHTML = "";

  tab1.innerHTML = "";
  tab2.innerHTML = "";
  NikeData.slice(0, 9).forEach((it) => {
    loadProductFromDataTab1(it);
  });
  NikeData.slice(9).forEach((it) => {
    loadProductFromDataTab2(it);
  });
  handleProductDetail();
});
// ============================================ Xử lý chức năng sắp xếp
let sortSelect = document.querySelector(
  "section.content .content-right .sort select"
);

sortSelect.addEventListener("change", function () {
  tab1.innerHTML = "";
  console.log(sortSelect.value);
  if (sortSelect.value === "Mới nhất") {
    NikeData.forEach((it) => {
      if (it.new != undefined) loadProductFromDataTab1(it);
    });
    handleProductDetail();
  } else if (sortSelect.value === "Tên từ A - Z") {
    let newNikeData = NikeData.sort((a, b) => (a.name > b.name ? 1 : -1));
    newNikeData.forEach((item) => {
      loadProductFromDataTab1(item);
    });
    handleProductDetail();
  } else if (sortSelect.value === "Tên từ Z - A") {
    let newNikeData = NikeData.sort((a, b) => (a.name < b.name ? 1 : -1));
    newNikeData.forEach((item) => {
      loadProductFromDataTab1(item);
    });
    handleProductDetail();
  } else if (sortSelect.value === "Giá tăng dần") {
    let newNikeData = NikeData.sort((a, b) => (a.price > b.price ? 1 : -1));
    newNikeData.forEach((item) => {
      loadProductFromDataTab1(item);
    });
    handleProductDetail();
  } else if (sortSelect.value === "Giá giảm dần") {
    let newNikeData = NikeData.sort((a, b) => (a.price < b.price ? 1 : -1));
    newNikeData.forEach((item) => {
      loadProductFromDataTab1(item);
    });
    handleProductDetail();
  }
});

// ============================================ Xử lý cho phần Next và Prev
let nextButton = document.querySelector(
  "section.content .content-right .switch_tabs button.next"
);

let prevButton = document.querySelector(
  "section.content .content-right .switch_tabs button.prev"
);

nextButton.addEventListener("click", function (event) {
  if (document.querySelector(".content-right").contains(tab1)) {
    tab1.style.display = "none";
    tab2.style.display = "flex";
    nextButton.style.display = "none";
  }
});

prevButton.addEventListener("click", function (event) {
  if (document.querySelector(".content-right").contains(tab2)) {
    tab1.style.display = "flex";
    tab2.style.display = "none";
    prevButton.style.display = "flex";
    nextButton.style.display = "flex";
  }
});

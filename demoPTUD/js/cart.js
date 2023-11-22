let productContent = document.querySelector(
  "section.shoping-cart .left-container .list-product"
);
const endpoint = "https://6210bfd64cd3049e1783e6c5.mockapi.io/api/cart";

window.addEventListener("load", async function () {
  // Xử lý load sản phẩm từ API
  async function getProductFromCart() {
    const response = await fetch(endpoint);
    const data = await response.json();
    productContent.innerHTML = "";
    if (data.length !== 9) {
      document.querySelector(
        "section.shoping-cart .left-container .header-title h1:nth-child(2)"
      ).textContent = `${data.length} sản phẩm`;
    } else document.querySelector("section.shoping-cart .left-container .header-title h1:nth-child(2)").textContent = `0 sản phẩm`;

    data.forEach(async function (it, index) {
      let total = (
        parseInt(it.price.replaceAll(".", "").substr(0, it.price.length - 5)) *
        it.quantity
      )
        .toString()
        .replace(/\B(?=(\d{3})+(?!\d))/g, ".");
      let product = `<div class="product product-item">
    <div class="product-details">
      <img src=${it.mainImg} alt="" />
      <div class="box">
        <h2>${it.name} </h2>
        <h3>${it.brandName} </h3>
        <div class="remove" data-num="${+it.id}">Remove</div>
      </div>
    </div>
    <div class="quantity">
      <div class="box">
        <button type="button" id="plus">
          <i class="fa-solid fa-minus"></i>
        </button>
        <div class="quan-num">
          <h2>${it.quantity}</h2>
        </div>
        <button type="button" id="minus">
          <i class="fa-solid fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="price">
      <h2>${it.price}</h2>
    </div>
    <div class="total">
      <h2>${total} VND</h2>
    </div>
  </div>`;
      productContent.insertAdjacentHTML("beforeend", product);
    });
  }
  await getProductFromCart();

  let removeButtonList = document.querySelectorAll(
    "section.shoping-cart .left-container .product-item .product-details .remove"
  );

  //xử lý tăng giảm số lượng sản phẩm
  // let quanList = document.querySelectorAll(
  //   "section.shoping-cart .left-container .product-item .quantity h2"
  // );
  // let listplus = document.querySelectorAll(".product-item .quantity .box #plus");
  // let listplusbtn = document.querySelectorAll(".product-item .quantity .box #plus i");
  // let listminus = document.querySelectorAll(".product-item .quantity .box #minus");
  // let listminusbtn = document.querySelectorAll(".product-item .quantity .box #minus i");
  // let listquanNum = parseInt(document.querySelectorAll(".product-item .quantity .box .quan-num h2").value);
  // let listquantity = document.querySelectorAll(".product-item .quantity .box .quan-num h2");

  // listplus.forEach((it) => {
  //   it.addEventListener("click", function() {
  //     quanNum++;
  //     quantity.textContent = quanNum;
  //     plusbtn.style.background = "var(--lightpink)";
  //   });
  // });
  // minus.addEventListener("click", function() {
  //   if(quanNum > 1) {
  //     quanNum--;
  //   quantity.textContent = quanNum;
  //   minusbtn.style.color = "var(--lightpink)";
  //   }
  // });
  

  // Xử lý xoá sản phẩm khỏi API
  async function deleteProduct() {
    removeButtonList.forEach((it) => {
      it.addEventListener("click", async function (event) {
        await fetch(`${endpoint}/${+event.target.dataset.num}`, {
          method: "DELETE",
        });
        productContent.innerHTML = "";
        location.reload();
        await getProductFromCart();
      });
    });
  }
  await deleteProduct();

  // Xử lý tổng tiền
  let totalList = document.querySelectorAll(
    "section.shoping-cart .left-container .product-item .total h2"
  );
  let totalCheckOut = 0;
  totalList.forEach((it) => {
    let total = parseInt(
      it.textContent.replaceAll(".", "").substr(0, it.textContent.length - 5)
    );
    totalCheckOut += total;
  });

  document.querySelector(
    "section.shoping-cart .right-container .total h1"
  ).textContent =
    totalCheckOut.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + " VND";
});


let ckeckout = document.querySelector(".check-out");
ckeckout.addEventListener("click", () => {
  alert("Thanh toán thành công! Cảm ơn khách hàng đã mua sắm ở của hàng chúng tôi.");
});

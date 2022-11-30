
let temp_digits = [];
function filter_numbers(e) {
    const regex = /[\D\sa-zA-Zก-ฮ]/;
    const numbers = e.value.split(regex);
    const show_digits = $("#show_digits");
    const input_digits = $("#input_digits");

    numbers.map((res) => {
        if (res.length == 2) {
            input_digits.val('');
            show_digits.append(`
            <button onclick="remove_numbers(this)">${res}</button>
            `)
            temp_digits.push(res);
        }
    });
}

function remove_numbers(e) {
    e.remove();
}

function add_orders(e) {
    const top_digits = $("#top_digits");
    const bottom_digits = $("#bottom_digits");
    const show_digits = $("#show_digits");
    const orders = $("#footer_digits");
    if (!show_digits.html()) {
        console.log("ใส่เลขที่จะเล่น");
    } else {
        if (!top_digits.val() && !bottom_digits.val()) {
            console.log("ใส่ราคา");
        } else {

            orders.append(`
            <div class="d-flex justify-content-between p-2 temp_orders">
                <div class="d-flex flex-column text-center">
                    <div class="detail1">
                    ${$("button.active").html()}
                    </div>
                    <div class="detail2">
                    บน x ล่าง
                    </div>
                    <div class="detail3">
                    ${top_digits.val() ? top_digits.val() : 0} x ${bottom_digits.val() ? bottom_digits.val() : 0}
                    </div>
                </div>
                <div class="orders w-50">${temp_digits.join().replaceAll(",", " ")}</div>
                <div class="remove">
                    <button onclick="remove_orders(this)">remove</button>
                </div>
            </div>`);


            // console.log(digits);
            show_digits.html(``);
            top_digits.val(``);
            bottom_digits.val(``);
            temp_digits = [];


        }
    }

}

function remove_orders(e) {
    $(e).parent().parent().remove();

}

function confirm_orders() {
    const orders_price = $(".detail3");
    const orders_bill = $(".orders");
    
    const digits = [];
    for (let i = 0; i < orders_price.length; i++) {
        const price = orders_price[i].innerHTML.trim().replaceAll(" ", "").split("x");
        const orders = orders_bill[i].innerHTML.split(" ");

        const bills = orders.map(order => {
            const bill = `|NF|${order}|PTF|${price[0]}|PBF|${price[1]}`;
            digits.push(bill);
            return bill;
        });
    }

    digits.map(digit => {
        split_digits = digit.split(/[|NF||PTF||PBF|]/);
        const filter_digits = split_digits.filter(res => {
            return res !== null && res !== false && res !== "";
        });
        console.log(filter_digits[0]);
    })
    // console.log(digits);
}

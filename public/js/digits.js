
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
        }
    });
}

function remove_numbers(e) {
    e.remove();
}

function add_orders(e) {
    const top = $("#top_digits");
    const bottom = $("#bottom_digits");
    const show_digits = $("#show_digits");
    const orders = $(".card-footer");
    if (!show_digits.html()) {
        console.log("ใส่เลขที่จะเล่น");
    } else {
        if (!top.val() && !bottom.val()) {
            console.log("ใส่ราคา");
        } else {
            orders.append(`
            <div class="d-flex justify-content-between">
                <div class="detail w-25">
                ${$("button.active").html()} <br/>บน x ล่าง<br/>${top.val() ? top.val() : 0} x ${bottom.val() ? bottom.val() : 0}
                </div>
                <div class="orders w-50">22 01</div>
            <div class="remove">
                <button>remove</button>
            </div>
        </div>`)
        }
    }

}
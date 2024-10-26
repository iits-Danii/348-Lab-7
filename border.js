function P_color() {
    var b_wid = document.getElementById("border_width").value;
    var b_r = document.getElementById("border_R").value;
    var b_g = document.getElementById("border_G").value;
    var b_b = document.getElementById("border_B").value;
    var bg_r = document.getElementById("bg_R").value;
    var bg_g = document.getElementById("bg_G").value;  
    var bg_b = document.getElementById("bg_B").value;

    var paragraph = document.getElementById("paragraph");

    paragraph.style.borderColor = `rgb(${b_r},${b_g},${b_b})`;
    paragraph.style.borderWidth = b_wid;
    paragraph.style.backgroundColor = `rgb(${bg_r},${bg_g},${bg_b})`;
}
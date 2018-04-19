var wan_a = document.querySelectorAll(".wan_index_a")[0],
    wan_b = document.querySelectorAll(".wan_index_b")[0],
    index_mouse = document.querySelectorAll(".index_mouse img")[0];
var show = false;

function goggle() {
    if (show) {
        wan_a.style.webkitTransform = "translate3d(0, 0, 0)";
        wan_b.style.webkitTransform = "translate3d(100%, -100%, 0)";
        index_mouse.src = "../front-end-picture/index_right_jiantou.png";
        show = false;
    } else {
        wan_a.style.webkitTransform = "translate3d(-100%, 0, 0)";
        wan_b.style.webkitTransform = "translate3d(0, -100%, 0)";
        index_mouse.src = "../front-end-picture/index_left_jiantou.png";
        show = true;
    }
}
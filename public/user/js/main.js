(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.nav-bar').addClass('sticky-top');
        } else {
            $('.nav-bar').removeClass('sticky-top');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 24,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            992:{
                items:2
            }
        }
    });
    

    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 24,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            992:{
                items:2
            }
        }
    });
})(jQuery);

$(document).ready(function(){
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        appendDots: '.slider-dots',
        prevArrow: '.slider-button-prev',
        nextArrow: '.slider-button-next',
    });


});
$(document).ready(function(){
    $('.hot').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
    });
});
$(document).ready(function(){
    $('.brands').slick({
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1000, // Điểm dừng (VD: khi màn hình có độ rộng dưới 768px)
                settings: {
                    slidesToShow: 2, // Đặt số slide hiển thị khi màn hình nhỏ lại là 1
                }
            },
            {
                breakpoint: 700, // Điểm dừng (VD: khi màn hình có độ rộng dưới 768px)
                settings: {
                    slidesToShow: 1, // Đặt số slide hiển thị khi màn hình nhỏ lại là 1
                }
            }
        ],
    });
});
$(document).ready(function(){
    $('.bai-viet-lq').slick({
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1000, // Điểm dừng (VD: khi màn hình có độ rộng dưới 768px)
                settings: {
                    slidesToShow: 2, // Đặt số slide hiển thị khi màn hình nhỏ lại là 1
                }
            },
            {
                breakpoint: 700, // Điểm dừng (VD: khi màn hình có độ rộng dưới 768px)
                settings: {
                    slidesToShow: 1, // Đặt số slide hiển thị khi màn hình nhỏ lại là 1
                }
            }
        ],
       
           
        
    });
});
//srearch
function updateDistricts() {
    const location = document.getElementById("location").value;
    const districtSelect = document.getElementById("district");

    // Xóa tất cả các option cũ
    districtSelect.innerHTML = "";

    if (location === "hanoi") {
        // Thêm các quận/huyện của Hà Nội
        const districts = ["Quận Ba Đình", "Quận Hoàn Kiếm", "Quận Hai Bà Trưng", "Quận Đống Đa", "Quận Tây Hồ", "Quận Cầu Giấy", "Quận Thanh Xuân", "Quận Hoàng Mai", "Quận Long Biên", "Quận Hà Đông", "Quận Nam Từ Liêm", "Quận Bắc Từ Liêm", "Quận Thanh Trì", "Huyện Gia Lâm", "Huyện Đông Anh", "Huyện Sóc Sơn", "Huyện Ba Vì", "Huyện Phúc Thọ", "Huyện Thạch Thất", "Huyện Quốc Oai", "Huyện Chương Mỹ", "Huyện Đan Phượng", "Huyện Hoài Đức", "Huyện Thanh Oai", "Huyện Mỹ Đức", "Huyện Ứng Hòa", "Huyện Thường Tín", "Huyện Phú Xuyên", "Huyện Mê Linh", "Huyện Sơn Tây", "Quận Hà Giang (Thị xã Sơn Tây)"];
        for (const district of districts) {
            const option = document.createElement("option");
            option.value = district.toLowerCase().replace(" ", "");
            option.textContent = district;
            districtSelect.appendChild(option);
        }
    } else if (location === "hochiminh") {
        // Thêm các quận/huyện của Hồ Chí Minh
        const districts = ["Quận 1", "Quận 2", "Quận 3", "Quận 4", "Quận 5", "Quận 6", "Quận 7", "Quận 8", "Quận 9", "Quận 10", "Quận 11", "Quận 12", "Quận Bình Tân", "Quận Bình Thạnh", "Quận Gò Vấp", "Quận Phú Nhuận", "Quận Tân Bình", "Quận Tân Phú", "Quận Thủ Đức", "Quận Hóc Môn", "Quận Củ Chi", "Quận Nhà Bè"];
        for (const district of districts) {
            const option = document.createElement("option");
            option.value = district.toLowerCase().replace(" ", "");
            option.textContent = district;
            districtSelect.appendChild(option);
        }
    } else {
        // Chọn tất cả
        const option = document.createElement("option");
        option.value = "all";
        option.textContent = "Tất cả";
        districtSelect.appendChild(option);
    }
}

function searchLocation() {
    const selectedLocation = document.getElementById("location").value;
    const selectedDistrict = document.getElementById("district").value;
    // Xử lý tìm kiếm dựa trên selectedLocation và selectedDistrict ở đây.
    // Ví dụ: Hiển thị kết quả hoặc điều hướng đến trang khác.
}


  //scroll toi duan
  $('#hanghieu').click(function() {
    // Sử dụng jQuery để cuộn mượt mà đến phần tử
    $('html, body').animate({
        scrollTop: $('#duanhanghieu').offset().top
    }, 1000); // 1000 là tốc độ cuộn (1 giây)
});
$('#dangtrienkhai').click(function() {
    // Sử dụng jQuery để cuộn mượt mà đến phần tử
    $('html, body').animate({
        scrollTop: $('#duandangtrienkhai').offset().top
    }, 1000); // 1000 là tốc độ cuộn (1 giây)
});
$('#dahoanthanh').click(function() {
    // Sử dụng jQuery để cuộn mượt mà đến phần tử
    $('html, body').animate({
        scrollTop: $('#duandahoanthanh').offset().top
    }, 1000); // 1000 là tốc độ cuộn (1 giây)
});

// ---------------------------------sctrolldenbaiviet----------------------------------
$(document).ready(function() {
    // Bắt sự kiện click cho các liên kết
    $('#phobien, #tintuc, #kinhnghiemdautu, #chuyendautu, #file').click(function() {
        // Loại bỏ class "active" từ tất cả các liên kết
        $('#phobien, #tintuc, #kinhnghiemdautu, #chuyendautu, #file').removeClass('active');
        
        // Thêm class "active" cho liên kết được nhấn
        $(this).addClass('active');
        
        // Kiểm tra nếu liên kết là '#file', thì ngăn chặn mặc định
        if ($(this).attr('id') === 'file') {
            event.preventDefault();
            var targetUrl = $(this).attr('href');
            window.location.href = targetUrl;
        } else {
            // Nếu không phải là '#file', thì cuộn mượt mà đến phần tử liên quan
            var targetId = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(targetId).offset().top
            }, 1000); // 1000 là tốc độ cuộn (1 giây)
        }
    });
});



// duannnn-detail----------------------------------------------
$('#linkvitri').click(function() {
    // Sử dụng jQuery để cuộn mượt mà đến phần tử
    $('html, body').animate({
        scrollTop: $('#vitri').offset().top
    }, 1000); // 1000 là tốc độ cuộn (1 giây)
});
$('#linktongquan').click(function() {
    // Sử dụng jQuery để cuộn mượt mà đến phần tử
    $('html, body').animate({
        scrollTop: $('#tongquan').offset().top
    }, 1000); // 1000 là tốc độ cuộn (1 giây)
});
$('#linktienich').click(function() {
    // Sử dụng jQuery để cuộn mượt mà đến phần tử
    $('html, body').animate({
        scrollTop: $('#tienich').offset().top
    }, 1000); // 1000 là tốc độ cuộn (1 giây)
});
$('#linkthanhtoan').click(function() {
    // Sử dụng jQuery để cuộn mượt mà đến phần tử
    $('html, body').animate({
        scrollTop: $('#thanhtoan').offset().top
    }, 1000); // 1000 là tốc độ cuộn (1 giây)
});
$('#linkmatbang').click(function() {
    // Sử dụng jQuery để cuộn mượt mà đến phần tử
    $('html, body').animate({
        scrollTop: $('#matbang').offset().top
    }, 1000); // 1000 là tốc độ cuộn (1 giây)
});
$('#linklienhe').click(function() {
    // Sử dụng jQuery để cuộn mượt mà đến phần tử
    $('html, body').animate({
        scrollTop: $('#lienhe').offset().top
    }, 1000); // 1000 là tốc độ cuộn (1 giây)
});

//////////////danh muc scroll
// const fixedCategory = document.querySelector('.fixed-category');

// function handleScroll() {
//     if (window.innerWidth >= 980) { // Chỉ thực hiện khi màn hình rộng hơn hoặc bằng 768px
//         if (window.scrollY >= 2000 && window.scrollY < 3500) {
//             fixedCategory.classList.add('fixed');
//         } else {
//             fixedCategory.classList.remove('fixed');
//         }
//     }
// }

// window.addEventListener('scroll', handleScroll);
// window.addEventListener('resize', handleScroll); // Xử lý lại khi kích thước màn hình thay đổi

// -----------------------------ky gui----------------------------
const formMenu = document.querySelector('.form-menu');

// Bắt sự kiện cuộn trang
window.addEventListener('scroll', () => {
    // Lấy vị trí hiện tại của trang
    const scrollY = window.scrollY;

    // Nếu cuộn xuống đủ xa, ẩn form-menu
    if (scrollY > 0) {
        formMenu.classList.add('form-menu-hidden');
    } else {
        // Ngược lại, hiển thị lại form-menu
        formMenu.classList.remove('form-menu-hidden');
    }
});


// Lấy danh sách tất cả các liên kết trong navbar
var links = document.querySelectorAll('.navbar-nav .nav-link');

// Lặp qua từng liên kết
links.forEach(function(link) {
    // Thêm sự kiện click cho từng liên kết
    link.addEventListener('click', function() {
        // Loại bỏ lớp "active" từ tất cả các liên kết
        links.forEach(function(link) {
            link.classList.remove('active');
        });

        // Thêm lớp "active" cho liên kết đang được bấm
        this.classList.add('active');
    });
});

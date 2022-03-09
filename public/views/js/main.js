// SEARCH
$(document).on('click','.header_content_body_search_link',function (e){
    e.preventDefault()
    $('.header_search_content_form_input').toggleClass('open');
})


$(document).on('click','.burger',function (e){
    e.preventDefault()
    $('body').toggleClass('overflowY')
    $('.mobileHeader').toggleClass('isOpen')
})
$(document).on('click','.mobileHeader_closeBtn',function (e){
    e.preventDefault()
    $('body').removeClass('overflowY')
    $('.mobileHeader').removeClass('isOpen')
})


$('.blogs_content').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                centerMode: true,
                centerPadding:'20px',
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite:true,
                dots: false
            }
        },
    ]
})


//
// $('.news_content').slick({
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     infinite: true,
//     dots: false,
//     responsive: [
//         {
//             breakpoint: 992,
//             settings: {
//                 centerMode: true,
//                 centerPadding:'20px',
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//                 infinite:true,
//                 dots: false
//             }
//         },
//     ]
// })



//Acording

$('.acordion_card_title').click(function () {
    $(this).parents('.acordion').find('.acordion_card').not($(this).parents('.acordion_card')).removeClass('open')
    $(this).parents('.acordion').find('.acordion_card').not($(this).parents('.acordion_card')).children(".acordion_card_text").hide('200')
    $(this).parents('.acordion_card').toggleClass('open')
    $(this).parent().children('.acordion_card_text').toggle('200')
})

//Acording





// Live Chat

// function liveChat() {
//     var liveChatInputVal = $("#liveChat_input").val().push();
//     console.log(liveChatInputVal);
//     $("#liveChat_input").val("");

// }

var send_btn = document.getElementById("send_btn");
send_btn.addEventListener("click",(e)=>{
    e.preventDefault();
    var liveChat_input = document.getElementById("liveChat_input").value;
    var html =
    `
    <div class="liveChat_content_body_item liveChat_content_body_item_user">
        <div class="liveChat_content_body_item_user--cont">
            ${liveChat_input}
        </div>
    </div>
    `
    const div = document.createElement("div");
    div.className ="liveChat_content_body_item_user"
    div.innerHTML = html
    document.getElementById('liveChat_content_body').append(div);
    var liveChat_input = document.getElementById("liveChat_input").value = " "
})




// Live Chat

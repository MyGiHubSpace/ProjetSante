
$(".icon").click(function(){
	$(".section-modal").remove();

});
$(function () {

    $('.toggle').click(function (event) {
        event.preventDefault();
        var target = $(this).attr('href');
        $(target).toggleClass('hidden show');
    });

});

<script type="text/javascript">
var clicks = 0;
function onClick() {
clicks += 1;
document.getElementById("clicks").innerHTML = clicks;
};
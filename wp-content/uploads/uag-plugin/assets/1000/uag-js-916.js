document.addEventListener("DOMContentLoaded", function(){ var selector = document.querySelectorAll( '.uagb-block-9dc1e3fe' );
if ( selector.length > 0 ) {

	var blockquote__tweet = selector[0].getElementsByClassName("uagb-blockquote__tweet-button");

	if ( blockquote__tweet.length > 0 ) {

		blockquote__tweet[0].addEventListener("click",function(){	
			var request_url = "https://twitter.com/intent/tweet?text&url=http%3A%2F%2Flocalhost%2Fkeluhkesahremaja%2Fkeluhkesahremaja%2Fcontact%2F";
			window.open( request_url );
		});
	}
}
window.addEventListener( 'DOMContentLoaded', function() {
	UAGBLottie._run( {"block_id":"7b91f4c9","jsonLottie":"","lottieURl":"","lottieSource":"","height":"","heightTablet":"","heightMob":"","width":"","widthTablet":"","widthMob":"","backgroundColor":"","backgroundHColor":"","loop":true,"speed":1,"reverse":false,"playOn":"none"}, 'uagb-block-7b91f4c9' );
});
 });
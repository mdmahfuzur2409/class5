 <!--video url---- https://youtu.be/xZIh2so3-AU?si=ron3Eajc44j7nBz6 -->
<!-- thumbnail----- https://i.ytimg.com/vi/xZIh2so3-AU/hq720.jpg -->
<?php
echo "<h1>Find Thumbnail From Url</h1>";
function getThumbnail ( $videoUrl){
$videoUrlArray = explode('?',$videoUrl);
$videoIdArray = explode('/',$videoUrlArray[0]);
$videId = end($videoIdArray);
// echo "https://i.ytimg.com/vi/$videId/hq720.jpg";
echo "<img src='https://i.ytimg.com/vi/$videId/hq720.jpg'>";
}
getThumbnail ("https://youtu.be/m7mJKNeYFzs?si=gKQvzSifWMi_79v5");
getThumbnail ("https://youtu.be/5oH9Nr3bKfw?si=iQ6X7YaFIj4yb1H4");
?>

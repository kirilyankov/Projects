<?php
	$page_title = 'Blog';
	$active = array("","","active","");
	include('templates/header.php');
?>
<section id="blog_wrapper">
    <h1>Read Our Latest Posts. Learn Something New Maybe!</h1>
	<?php include('templates/blog_posts.php') ?>
<!-- </section> -->
	<nav class="pagination clearfix">
    <a href="javascript:void(0)" class="current">1</a>
    <a href="javascript:void(0)" class="">2</a>
    <a href="javascript:void(0)" class="">3</a>
    <a href="javascript:void(0)" class="">4</a>
	</nav>
</section>

<?php include('templates/footer.php') ?>
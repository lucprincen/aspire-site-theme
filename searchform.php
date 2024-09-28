<form role="search" method="get" id="searchform" class="searchform form-inline" action="/">
<div class="input-group">
    <input type="text" value="<?= is_search() ? get_search_query() : '';  ?>" name="s" id="s" class="form-control" placeholder="Search">
    <?php if ((is_singular('talk')) || is_post_type_archive('talk') || (isset($_GET['post_type']) && $_GET['post_type'] == 'talk')) { ?>
        <input type="hidden" name="post_type" value="talk">
    <?php } ?>
    <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
            <span class="glyphicon glyphicon-search"></span>
        </button>
    </span>
</div>
</form>

<form action="<?= esc_url(home_url('/')) ?>" class="form-inline">
    <? # input must have name ="s"*?>
    <input type="search" name="s" id="" value="<?= get_search_query() ?>">
    <button type="submit" class="btn btn-info mx-2">Search</button>
</form>
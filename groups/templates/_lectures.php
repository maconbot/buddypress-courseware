<div id="lectures-tree">
    <input type="text" id="lectures-tree-search-text" class="hide-if-no-js" />
    <input type="submit" id="lectures-tree-search-submit" class="hide-if-no-js" value="<?php _e( "Search Lectures", "bpsp" ); ?>" />
    <div id="lectures-tree-container"></div>
    <ul id="lectures-tree-data" class="no-js">
        <?php echo $lectures; ?>
    </ul>
</div>
<tr id='<?php echo $item->ItemID; ?>'>
    <td> <a href="<?php echo $item->ListingDetails->ViewItemURL; ?>" target=_blank> <?php echo $item->ItemID; ?> </a></td>
    <td> <a href="<?php echo get_url_from_sku($item->SKU); ?>" target=_blank> <?php echo $item->SKU; ?>  </a></td>
    <td> <?php echo $item->Title; ?> </td>
    <td> <img src='<?php echo $item->PictureDetails->GalleryURL; ?>' /> </td>
    <td> <?php echo $item->BuyItNowPrice; ?> </td>
    <td> <?php echo (empty($db_item['VendorPrice'])?'':calculate_rec_price($db_item['VendorPrice'])); ?> </td>
    <td> <?php echo get_vendor_from_sku($item->SKU); ?> </td>
    <td id='vendor_price_<?php echo $item->SKU;?>'> <?php echo ($db_item? $db_item['VendorPrice']: ''); ?></td>
    <td id='vendor_quantity_<?php echo $item->SKU;?>'> <?php echo ($db_item? $db_item['VendorQty']: ''); ?></td>
    <td> 
        <a href="#" onclick="update_item('<?php echo $item->ItemID;?>')">
            <button class="btn btn-primary" type="button">Refresh</button>
        </a>
        <a href="#" onclick="update_item('<?php echo $item->ItemID;?>')">
            <button class="btn btn-info" type="button">Revise</button>
        </a>
        <?php if($type !=='ActiveList') { ?>
        <a href="#" onclick="update_item('<?php echo $item->ItemID;?>')">
            <button class="btn btn-success" type="button">Relist</button>
        </a>
        <?php } ?>
        <?php if($type ==='ActiveList') { ?>
        <a href="#" onclick="update_item('<?php echo $item->ItemID;?>')">
            <button class="btn btn-warning" type="button">Drop</button>
        </a>
        <?php } ?>
    </td>
</tr>



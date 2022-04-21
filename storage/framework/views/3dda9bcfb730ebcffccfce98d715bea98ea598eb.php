








<table class="table table-primary table-bordered border-bold" style="margin-left: 100px;">
    
    
    
    
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: darkturquoise; color: white">
        <th style="font-size: 20px; color: black; background-color: gray">Name</th>
        <td><?php echo e($category->cat_name); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: darkturquoise; color: white">
        <th style="font-size: 20px; color: black; background-color: gray">Image</th>
        <td><img class="img-fluid" alt="responsive image" width="230" height="200"
             src="<?php echo e(asset('storage/images/category/'.$category->cat_image )); ?>"></td>
    </tr>
</table>
<?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/FirstFashion/category/categoryDetails.blade.php ENDPATH**/ ?>
<table class="table table-primary table-bordered border-bold" style="margin-left: 100px;">
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
        <th style="font-size: 20px; color: black; background-color: rgb(255,99,71);">ID</th>
        <td><?php echo e($shirt->shirt_id); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
        <th style="font-size: 20px; color: black; background-color: rgb(255,99,71);">Name</th>
        <td><?php echo e($shirt->shirt_name); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
        <th style="font-size: 20px; color: black; background-color: rgb(255,99,71);">Image</th>
        <td><img style="width: 100px; height:100px" src="<?php echo e(asset('storage/images/shirt/' .$shirt->shirt_image)); ?>"
                 alt=""></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
        <th style="font-size: 20px; color: black; background-color: rgb(255,99,71);">Category</th>
        <td><?php echo e($catnames->cat_name); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
        <th style="font-size: 20px; color: black; background-color: rgb(255,99,71);">Material</th>
        <td><?php echo e($shirt->shirt_material); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
        <th style="font-size: 20px; color: black; background-color: rgb(255,99,71);">Size</th>
        <td><?php echo e($shirt->shirt_size); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
        <th style="font-size: 20px; color: black; background-color: rgb(255,99,71);">Price</th>
        <td><?php echo e($shirt->shirt_price); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
        <th style="font-size: 20px; color: black; background-color: rgb(255,99,71);">Description</th>
        <td id="shirt_description" name="shirt_description"
                      rows="3"><?php echo e($shirt->shirt_description); ?>

        </td>
    </tr>
</table>

<?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/shirt/shirtDetails.blade.php ENDPATH**/ ?>
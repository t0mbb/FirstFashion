<table class="table table-primary table-bordered border-bold" style="margin-left: 100px;">




    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: darkturquoise; color: white">
        <th style="font-size: 20px; color: black; background-color: gray">Name</th>
        <td><?php echo e($customer->cus_name); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: darkturquoise; color: white">
        <th style="font-size: 20px; color: black; background-color: gray">Gender</th>
        <td><?php echo e($customer->cus_gender); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: darkturquoise; color: white">
        <th style="font-size: 20px; color: black; background-color: gray">Phone</th>
        <td><?php echo e($customer->cus_phone); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: darkturquoise; color: white">
        <th style="font-size: 20px; color: black; background-color: gray">Address</th>
        <td><?php echo e($customer->cus_address); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: darkturquoise; color: white">
        <th style="font-size: 20px; color: black; background-color: gray">Email</th>
        <td><?php echo e($customer->cus_email); ?></td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: darkturquoise; color: white">
        <th style="font-size: 20px; color: black; background-color: gray">Date of brith</th>
        <td><?php echo e($customer->cus_dob); ?></td>
    </tr>
</table>

<?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/FirstFashion/customer/customerDetails.blade.php ENDPATH**/ ?>
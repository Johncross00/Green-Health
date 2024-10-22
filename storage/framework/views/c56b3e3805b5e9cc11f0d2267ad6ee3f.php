<h3>Transactions</h3>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Montant</th>
            <th>UUID</th>
            <th>Date</th>
            <th>Statut</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php if($transaction->type === 'deposit'): ?>
                        Dépôt
                    <?php elseif($transaction->type === 'withdraw'): ?>
                        Retrait
                    <?php else: ?>
                        <?php echo e(ucfirst($transaction->type)); ?>

                    <?php endif; ?>
                </td>
                <td><?php echo e(number_format($transaction->amountFloat, 2)); ?> XOF</td>
                <td><?php echo e($transaction->uuid); ?></td>
                <td><?php echo e($transaction->created_at->format('d/m/Y H:i')); ?></td>
                <td>
                    <?php if($transaction->confirmed): ?>
                        Confirmé
                    <?php else: ?>
                        En attente
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\Users\PAVILION\Pictures\Samsung Flow\archive\public_html\resources\views/wallet/partials/transactions_pdf.blade.php ENDPATH**/ ?>
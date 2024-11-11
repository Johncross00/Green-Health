<?php if($transactions->count() > 0): ?>
    <div class="d-flex justify-content-between mb-3">
        <h4>Liste des Transactions</h4>
        <!-- Bouton pour exporter les données en PDF -->
        <div>
            <a href="<?php echo e(route('transactions.export', ['format' => 'pdf'])); ?>" class="btn btn-danger">Exporter en PDF</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
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
                        <!-- Affichage personnalisé des types -->
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
                                <span class="badge bg-success">Confirmé</span>
                            <?php else: ?>
                                <span class="badge bg-warning">En attente</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <!-- Masquer les numéros de pagination avec Tailwind -->
    <div class="d-flex justify-content-center">
        <?php echo e($transactions->onEachSide(1)->links('pagination::simple-tailwind')); ?>

    </div>
<?php else: ?>
    <p class="text-center">Aucune transaction trouvée.</p>
<?php endif; ?>
<?php /**PATH C:\Users\PAVILION\Pictures\Samsung Flow\archive\public_html\resources\views/wallet/partials/history-table.blade.php ENDPATH**/ ?>
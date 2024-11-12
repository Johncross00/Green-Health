@if ($transactions->count() > 0)
    <div class="d-flex justify-content-between mb-3">
        <h4>Liste des Transactions</h4>
        <!-- Bouton pour exporter les données en PDF -->
        <div>
            <a href="{{ route('transactions.export', ['format' => 'pdf']) }}" class="btn btn-danger">Exporter en PDF</a>
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
                @foreach ($transactions as $transaction)
                    <tr>
                        <!-- Affichage personnalisé des types -->
                        <td>
                            @if ($transaction->type === 'deposit')
                                Dépôt
                            @elseif ($transaction->type === 'withdraw')
                                Retrait
                            @else
                                {{ ucfirst($transaction->type) }}
                            @endif
                        </td>
                        <td>{{ number_format($transaction->amountFloat * 100) }} Jetons</td>
                        <td>{{ $transaction->uuid }}</td>
                        <td>{{ $transaction->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            @if ($transaction->confirmed)
                                <span class="badge bg-success">Confirmé</span>
                            @else
                                <span class="badge bg-warning">En attente</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Masquer les numéros de pagination avec Tailwind -->
    <div class="d-flex justify-content-center">
        {{ $transactions->onEachSide(1)->links('pagination::simple-tailwind') }}
    </div>
@else
    <p class="text-center">Aucune transaction trouvée.</p>
@endif

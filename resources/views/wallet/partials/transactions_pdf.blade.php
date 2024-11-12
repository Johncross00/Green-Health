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
        @foreach ($transactions as $transaction)
            <tr>
                <td>
                    @if ($transaction->type === 'deposit')
                        Dépôt
                    @elseif ($transaction->type === 'withdraw')
                        Retrait
                    @else
                        {{ ucfirst($transaction->type) }}
                    @endif
                </td>
                <td>{{ number_format($transaction->amountFloat, 2) }} Jetons</td>
                <td>{{ $transaction->uuid }}</td>
                <td>{{ $transaction->created_at->format('d/m/Y H:i') }}</td>
                <td>
                    @if ($transaction->confirmed)
                        Confirmé
                    @else
                        En attente
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

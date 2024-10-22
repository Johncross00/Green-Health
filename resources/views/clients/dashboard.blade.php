<div class="">
    <x-client-dashboard />
</div>
<div class="">
    <x-relationnel :profondeurs=$profondeurs :relationnels=$relationnels />
</div>

@if (Auth::user()->transactions->count())
    <div class="historique bg-dark">
        <div class="card bg-dark border-0">
            <div class="card-header">
                <small>Historique des bons validés</small>
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type de bon</th>
                            <th>Quantité</th>
                            <th>Date de validation</th>
                            <th>Status actuel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Auth::user()->transactions as $trans)
                            @php
                                $bonDate = optional($trans->bon)->date;
                                $isInvalid = $bonDate
                                    ? \Carbon\Carbon::parse($bonDate)->lt(\Carbon\Carbon::now())
                                    : false;
                            @endphp
                            <tr class="{{ $isInvalid ? 'border-isInvalid' : '' }}">
                                <td>{{ optional($trans->bon)->price ?? 'N/A' }}</td>
                                <td>{{ $trans->quantite }}</td>
                                <td>{{ $trans->created_at }}</td>
                                <td class="{{ $isInvalid ? 'text-danger' : 'text-success' }}">
                                    {{ $isInvalid ? 'Invalide' : 'Validé' }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@else
    <div class="d-flex justify-content-center align-content-center">
        <span>Aucun bon validé</span>
    </div>
@endif

<style>
    .border-isInvalid {
        border: 1px solid red;
    }
</style>

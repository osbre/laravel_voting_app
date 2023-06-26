<x-mail::message>
Hello there!

<x-mail::table>
| Item       | Number of Votes  |
| ---------- |:----------------:|
@foreach($itemVotesTotals as $itemVotesTotal)
| {{ $itemVotesTotal->itemId }} | {{ $itemVotesTotal->totalCount }} |
@endforeach
</x-mail::table>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

<div class="radio"><input type="radio" class="conv-merge-id" name="conv_merge" value="{{ $conversation->id }}" /><a href="{{ $conversation->url() }}" target="_blank" data-toggle="tooltip" title="{{ __('Click to view') }}"><strong>#{{ $conversation->number }}</strong> {{ $conversation->getSubject() }}</a></div>
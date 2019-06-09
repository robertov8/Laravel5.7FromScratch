@component('mail::message')
# New Project: {{ $project->title }}

{{ $project->discription }}

@component('mail::button', ['url' => url('/projects/' . $project->id)])
View Project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

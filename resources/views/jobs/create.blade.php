<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="$50,000"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Casiguran, Sorsogon"></x-forms.input>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"></x-forms.input>

        <x-forms.checkbox label="Feature (cost extra)" name="featured"/>

        <x-forms.divider/>
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education"></x-forms.input>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>

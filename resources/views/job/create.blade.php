<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs/create">
        <x-forms.input label="Title" name="title" type="text" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" type="text" placeholder="900000"/>
        <x-forms.input label="Location" name="location" type="text" placeholder="Winter Park, Florida"/>

        <x-forms.select label="Schedule" name="schedule" type="select">
            <option value="Part Time">Full Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>

        <x-forms.checkbox label="Feature (Paid)" name="featured"/>

        <x-forms.input label="URL" name="url" type="text" placeholder="http://hello.com"/>
        <x-forms.input label="Tags (comma seperated)" name="tags" type="text" placeholder="video, education"/>



        <x-forms.button>Login</x-forms.button>
    </x-forms.form>
</x-layout>

<x-layout>
   <div class="space-y-10">
       <section class="text-center">
           <h1 class="font-bold text-2xl">Let's Find You A Great Job</h1>
           <x-forms.form action="/search" class="mt-6">
               <x-forms.input :label="false" name="q" placeholder="Web Developer"/>
           </x-forms.form>
       </section>
       <section>
           <x-section-heading>Featured Jobs</x-section-heading>
           <div class="grid lg:grid-cols-3 gap-8 mt-6">
               @foreach($featuredJobs as $job)
                   <x-job-card :$job />
               @endforeach
           </div>
       </section>

       <section class="space-y-5">
           <x-section-heading>Tags</x-section-heading>
           <div>
               @foreach($tags as $tag)
                   <x-tag :$tag />
               @endforeach
           </div>
       </section>

       <section >
           <x-section-heading>Recent Jobs</x-section-heading>

           <div class="mt-6 space-y-6">
               @foreach($jobs as $job)
                   <x-job-card-wide :$job />
               @endforeach

           </div>
       </section>
   </div>
</x-layout>

<x-mail::message>
# Mail to be approved

<x-mail::panel>
A new post was created and need to be check
</x-mail::panel>
<x-mail::button :url="route('posts.show',$post)" color="success">
Post to be approved
</x-mail::button>
</x-mail::message>

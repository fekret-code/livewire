<div>
    <input placeholder="search" wire:model="search">
    <table>
        <tr>
            <td>#</td>
            <td>title</td>
            <td>content</td>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
            </tr>
        @endforeach
    </table>
    {!! $posts->links() !!}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <td>#</td>--}}
{{--            <td>title</td>--}}
{{--            <td>content</td>--}}
{{--        </tr>--}}
{{--        @foreach($oldPosts as $post)--}}
{{--            <tr>--}}
{{--                <td>{{$post->id}}</td>--}}
{{--                <td>{{$post->title}}</td>--}}
{{--                <td>{{$post->content}}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}
{{--    {!! $oldPosts->links() !!}--}}
</div>

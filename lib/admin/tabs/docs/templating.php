<p>Maera is a WordPress theme and as such it follows the default WordPress [template hierarchy](http://wphierarchy.com/). However, we do have some extra stuff going on under the hood that we have found make life a lot easier both for skilled developers and for novice users that may not be php developers.</p>
<p>In addition to the default template files that you can use if you want, we also provide a "views" folder that contains "twig" files. You can learn more about the twig language by clicking on <a href="http://twig.sensiolabs.org/">this link</a>.
<p>twig files have a structure and syntax a lot easier and more user-friendly than php. For example if you wanted to echo something in PHP, you would do this:</p>
<code>&#60?php echo $foo ?&#62</code>
<p>In twig however it's a lot simpler than that:</p>
<code>{{ foo }}</code>
<p>You can learn more about the syntax and naming conventions by reading the <a href="https://github.com/jarednova/timber/wiki">Timber Docs</a>.

To add your own templates you can create a <a href="http://codex.wordpress.org/Child_Themes">Child Theme</a> and either create custom php template files, or custom twig files. The template gierarchy of the twig files is the same as the <a href="http://wphierarchy.com/">default WordPress templates structure</a>, simply by replacing the <code>.php</code> suffix with <code>.twig</code>. You can keep your <code>.twig</code> files in the root of your child theme, or a <code>/views</code> folder.

<hr>

<h2>Post properties in twig files</h2>
<pre>
{{ post.ID }}                 // ID of the post
{{ post.post_author }}        // ID of the post author
{{ post.post_date }}          // timestamp in local time
{{ post.post_date_gmt }}      // timestamp in gmt time
{{ post.post_content }}       // Full (unprocessed) body of the post
{{ post.post_title }}         // title of the post
{{ post.post_excerpt }}       // excerpt field of the post, caption if attachment
{{ post.post_status }}        // post status: publish, new, pending, draft, auto-draft, future, private, inherit, trash
{{ post.comment_status }}     // comment status: open, closed
{{ post.ping_status }}        // ping/trackback status
{{ post.post_password }}      // password of the post
{{ post.post_name }}          // post slug, string to use in the URL
{{ post.post_modified }}      // timestamp in local time
{{ post.post_modified_gmt }}  // timestatmp in gmt time
{{ post.post_parent }}        // id of the parent post.
{{ post.guid }}               // global unique id of the post
{{ post.menu_order }}         // menu order
{{ post.post_type }}          // type of post: post, page, attachment, or custom string
{{ post.post_mime_type }}     // mime type for attachment posts
{{ post.comment_count }}      // number of comments
{{ post.terms }}              // taxonomy terms
{{ post.custom_field }}       // whatever custom field you've added (in the post_meta table)
</pre>

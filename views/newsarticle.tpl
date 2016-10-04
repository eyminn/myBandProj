
<section>
	{foreach from=$result item=oneItem}
		<article>
			<h1>{$oneItem.title}</h1>
			<h1>{$oneItem.content|truncate:30}</h1>
			<img src="img/{$oneItem.image}">
			<p>Uploaded : {$oneItem.date_created|date_format:"%d, %B, %G"}</p>
		</article>
	{/foreach}
</section>

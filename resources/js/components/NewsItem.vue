<template>
    <li class="clearfix">
        <div class="scale_image_container">
            <a :to="item.href"><img :src="item.img" alt="" class="scale_image" /></a>
        </div>
        <div class="post_text">
            <a :to="item.href">
                <h4>
                    {{ item.caption }}
                </h4>
            </a>
            <div class="event_date">
                {{ item.date }}
            </div>
        </div>
    </li>
</template>

<script>
export default {
    props: {
        item: Object,
    }
}
</script>
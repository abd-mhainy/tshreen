<template>
    <div class="item">
        <div class="scale_image_container">
            <a :to="item.href"><img :src="item.img" alt="" class="scale_image" /></a>
            <!--caption-->
            <div class="caption_type_1">
                <div class="caption_inner">
                    <a :to="item.href">
                        <h4>{{ item.caption }}</h4>
                    </a>
                    <div class="event_date">
                        {{ item.date }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        item: Object
    }
}
</script>
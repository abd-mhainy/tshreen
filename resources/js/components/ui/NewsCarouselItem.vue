<template>
    <div class="item">
        <div class="scale_image_container">
            <router-link :to="item.href"><img :src="item.img" alt="" class="scale_image" /></router-link>
            <!--caption-->
            <div class="caption_type_1">
                <div class="caption_inner">
                    <router-link :to="item.href">
                        <h4>{{ item.caption }}</h4>
                    </router-link>
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

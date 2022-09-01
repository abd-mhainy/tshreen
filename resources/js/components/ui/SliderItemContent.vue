<template>
                <a :to="item.href"><img :src="item.img" alt="" class="scale_image" /></a>
                <!--caption-->
                <div class="caption_type_1">
                    <div class="caption_inner">
                        <div class="clearfix">
                            <a href="#" class="button banner_button" :class="[item.tag]">{{ item.tagText }}</a>
                            <div class="event_date">
                                {{ item.date }}
                            </div>
                        </div>
                        <a :to="item.href">
                            <h3>
                                {{ item.caption }}
                            </h3>
                        </a>
                    </div>
                </div>
</template>

<script>
export default {
    props: {
        item: Object,
    }
}
</script>

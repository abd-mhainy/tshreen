<template>
                <router-link :to="item.href"><img :src="item.img" alt="" class="scale_image" /></router-link>
                <!--caption-->
                <div class="caption_type_1">
                    <div class="caption_inner">
                        <div class="clearfix">
                            <router-link
                                :to="item.tagHref" class="button banner_button"
                                :data-category="item.tagText"
                            >{{ item.tagText }}</router-link>
                            <div class="event_date">
                                {{ item.date }}
                            </div>
                        </div>
                        <router-link :to="item.href">
                            <h3>
                                {{ item.caption }}
                            </h3>
                        </router-link>
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

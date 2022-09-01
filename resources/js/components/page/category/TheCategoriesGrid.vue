<template>
    <li>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" v-for="item in items" :key="item.caption">
                <div>
                    <div class="scale_image_container">
                        <a :href="item.href"><img src="/images/news_img20.jpg" :alt="item.caption" class="scale_image"></a>
                        <div class="post_image_buttons">
                            <a href="#" class="button banner_button" :class="[item.tag]">{{ item.tagText }}</a>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="f_left">
                            <div class="event_date">{{ item.date }}</div>
                        </div>
                    </div>
                    <div class="post_text">
                        <h2 class="post_title"><a :href="item.href">{{ item.caption }}</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </li>
</template>

<script>
export default {
    props: {
        items: Array,
    }
}
</script>

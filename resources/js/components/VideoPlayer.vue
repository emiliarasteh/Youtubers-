
<template>
    <video-js style="width: 100%" height="500" class="vjs-theme-forest vjs-big-play-centered" ref="video-player"

           controls >
        <source :src="src" type="application/x-mpegURL" >
    </video-js>
</template>


<!--<script src="https://unpkg.com/video.js/dist/video.js"></script>-->
<script src="https://unpkg.com/@videojs/http-streaming/dist/videojs-http-streaming.js"></script>
<script>
import videojs from 'video.js';
// City
// import '@videojs/themes/dist/city/index.css';

export default {
    props: [
        "src"
    ],
    data() {
        return {
            player: null,
        };

    },
    mounted() {
        const element = this.$refs["video-player"];
        this.player = videojs(element, {
            fluid: true,
        });
        // player.src({
        //     src: 'https://d2zihajmogu5jn.cloudfront.net/bipbop-advanced/bipbop_16x9_variant.m3u8',
        //     type: 'application/x-mpegURL',
        // })
    }
}

</script>

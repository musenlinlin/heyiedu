<template>
    <div>
        <el-button>测试按钮</el-button>
        <el-date-picker v-model="value2" type="date" placeholder="选择日期" :picker-options="pickerOptions"></el-date-picker>

        <el-alert>测试</el-alert>
        <el-back-top>测试</el-back-top>
        <el-color-picker>color</el-color-picker>
    </div> 
</template>

<script>
export default {
    data () {
        return {
            value1: '',
            value2: '',
            pickerOptions: {
                disabledDate(time) {
                    return time.getTime() > Date.now();
                },
                shortcuts: [
                    {
                        text: '今天',
                        onClick(picker){
                            picker.$emit('pick', new Date());
                        }
                    },
                    {
                        text: '昨天',
                        onClick(picker){
                            const date = new Date();
                            date.setTime(date.getTime() - 3600 * 1000 * 24);
                            picker.$emit('pick', date);
                        }
                    }
                ]
            }
        };
    },
    methods: {
    
    },
    mounted(){

    }
};
</script>

<style scoped>
.el-select .el-input {
    width: 130px;
}
.my-autocomplete {
    li {
        line-height: normal;
        padding: 7px;
        
        .name {
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .author {
            font-size: 12px;
            color: #b4b4b4;
        }
        .highlighted .addr {
            color: #ddd;
        }
    }
}
</style>


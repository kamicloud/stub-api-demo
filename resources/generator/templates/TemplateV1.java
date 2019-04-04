package templates;

import definitions.annotations.*;

import java.util.Date;

/**
 * skdjflsd
 */
@SuppressWarnings("unused")
class TemplateV1 {


    public static class Enums {
        /**
         * 教师请假原因
         *
         * 详细的看代码吧
         */
//        enum TeacherLeaveReason {
//            /**
//             * 事件
//             */
//            EVENT,
//            /**
//             * 休息
//             */
//            RELAX,
//            /**
//             * 活动
//             */
//            ACTIVITY
//        }


        @Memo({
            "教师请假原因",
            "详细的看代码吧"
        })
        enum TeacherLeaveReason {
            @Memo("事件")
            EVENT,
            @Memo("休息")
            RELAX,
            @Memo("活动")
            ACTIVITY
        }

        /**
         * 用户状态
         */
        enum UserStatus implements FixedEnumValueInterface {
            INIT(0),
            DISABLED(2),
            IN_CLASS(4),
            ;
            int value;

            UserStatus(int value) {
                this.value = value;
            }

            @Override
            public int getValue() {
                return value;
            }
        }

        @StringEnum
        enum PayWay {
            WECHAT,
            ALIPAY,
        }

        /**
         * 教师类型
         */
        enum TeacherCatalog {
            PHH,
            NSH,
            XXX,
        }

        /**
         * 上课工具枚举
         */
        enum ToolAllow {
            XXX,
        }

        enum Gender {
            UNKNOWN,
            MALE,
            FEMALE,
        }

        enum ArticleStatus {
            UNKNOWN,
            UNKNOWN1,
        }
    }


    public class Models {
        /**
         * 用户信息
         * 第二行
         */
        @RESTFul
        class User extends UserProfile {
            /**
             * 一个注释
             */
            @DBField("id")
            @Mutable
            Integer id;
            /**
             * 这里只是留了一个备注
             */
            @DBField
            String name;
            String avatar;
        }

        /**
         * 用户的基本信息
         */
        class UserProfile {
            @DBField
            String name;
            // @DBField
            // Integer age;
        }

        /**
         * 模拟一个老师的信息
         */
        class Teacher {
            @DBField("id")
            int teacherId;
            String nickname;
            String pic;
            int[] marks;
            Enums.TeacherCatalog catalog;
            Teacher[] teachers;
            /**
             * 好评率，以1为单位
             */
            float goodCmtRate;
            boolean isMyFave;
            int[] openClass;
            int okClass;
            int classNum;
            Date sortTchTime;
            boolean isRecommended;
        }

        class TeacherLeaveRecord {
            @Mutable
            Integer id;
            String tname;
            Enums.TeacherLeaveReason reason;
        }

        /**
         * 一个分享场景的抽象
         */
        public class SharePayload {
            /**
             * 分享的标题
             */
            String title;
            /**
             * 分享的描述
             */
            String description;
            /**
             * 一个缩略图
             */
            String icon;
            /**
             * 点进去的链接
             */
            String url;
        }

        class Article {
            @Optional
            @Mutable
            Integer id;
            String title;
            @Optional
            String content;
            Models.User user;
            Enums.ArticleStatus status;
            @Optional
            Integer commentsCount;
            /**
             * 需要时用于标记是否收藏
             */
            @Optional
            Boolean favorite;
            /**
             * 是否是添加火热标记
             */
            @Optional
            Boolean hot;
            Date createdAt;
        }

        class ArticleComment {
            Integer id;
            Models.User user;
            String content;
            Date createdAt;
        }
    }

    class Controllers {
        class Article {
            /**
             * 获取文章列表
             */
            class GetArticles {
                @Response
                Models.Article[] articles;
            }

            /**
             * 取得一篇文章
             */
            class GetArticle {
                @Request
                Integer id;
                @Response
                Models.Article article;
            }

            /**
             * 添加文章
             */
            class CreateArticle {
                @Request
                String title;
                @Request
                String content;

                @Response
                Models.Article article;
            }
        }
        /**
         * 后台用户控制器，用来提供和用户相关的后台接口
         * 多行文本
         */
        public class AdminUser {
            @Methods({MethodType.POST})
            class GetUsers {
                @Request
                String[] strings;
                @Request
                int[] ints;
            }
        }

        /**
         * 用户控制器
         */
        public class User {
            @Methods({MethodType.POST, MethodType.DELETE})
            // @Middleware("某一个小范围的middleware")
            class GetUsers {
                /**
                 * 查询的ID
                 */
                @Request
                Integer id;

                @Request
                Enums.Gender gender;

                @Request
                @Optional
                Integer page;

                @Request
                @Optional
                Models.User testUser;

                @Request
                @Optional
                Models.User[] testUsers;

                @Response
                String val;

                @Response
                Models.User user;
            }

            @Methods({MethodType.POST})
            class CreateUser {
                /**
                 * 查询的ID
                 */
                @Request
                String email;
                @Request
                String[] emails;
                @Request
                Enums.Gender gender;
                @Request
                Enums.Gender[] genders;
                @Request
                Integer id;
                @Request
                Integer[] ids;

                @Response
                Models.User user;
                @Response
                Models.User[] users;
            }
        }
    }

}

# API SPECIFICATION OF ASKING

## HOMEPAGE
> /api/v1/posts

> Response:
```json
{
    "user_photo": string,
    "space_hover_detail": {
        "space_photo": string,
        "space_name": string,
        "space_desc": text,
        "space_follow_count": int,
        "space_follow_name": string,
        "space_follow_count": int
    },
    "user_hover_detail": {
        "user_photo": string,
        "user_name": string,
        "user_title": text,
        "user_employment_credentials": string,
        "user_education_credentials": string,
        "user_location_credentials": string,
        "user_content_view_credentials": string,
        "joined_at": timestamp,
        "follower_count": int
    },
    "user_space_detail": [
        {
            "space_photo": string,
            "space_name": string
        },
        {
            "space_photo": string,
            "space_name": string
        }
    ],
    "user_name": string,
    "space": string,
    "role": int,
    "post_photo": string,
    "like": int,
    "dislike": int,
    "comment_count": int,
    "share_count": int,
    "created_at": timestamp,
    "notification_count": int,
    "user_country_space_count": int
}
```
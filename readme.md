# reshared

### User
- id
- name
- phone
- email
- avatar
- password
- status
- email_verified_at
- created_at
- updated_at

### Statistic
- id
- model
- model_id
- data

### Like
- id
- user_id
- model_id
- model
- status

### Subscribe
- id
- user_id
- series_id
- status

### Series
- id
- title
- slug
- type
- poster
- description
- published_at
- deleted_at

### Episode
- id
- title
- body
- type
- sequence
- description
- published_at
- deleted_at

### Tag
- id
- name

### Tag_relation
- id
- tag_id
- model-id
- model
- status

### Thread
- id
- title
- body
- user_id
- created_at
- updated_at
- deleted_at

### Reply
- id
- body
- user_id
- thread_id
- deleted_at

### Role
- id
- name
- slug

### Role_relation
- id
- user_id
- role_id
- status

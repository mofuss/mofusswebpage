--
-- PostgreSQL database dump
--

-- Dumped from database version 11.5 (Ubuntu 11.5-1.pgdg18.04+1)
-- Dumped by pg_dump version 11.5 (Ubuntu 11.5-1.pgdg18.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: assets; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE public.assets (
    id uuid NOT NULL,
    path character varying(200) NOT NULL,
    description text,
    visible boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.assets OWNER TO homestead;

--
-- Name: countries; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE public.countries (
    id uuid NOT NULL,
    name character varying(200) NOT NULL,
    country_code character(2) NOT NULL,
    latitude character varying(50),
    longitude character varying(50),
    zoom character varying(10),
    tier character(2),
    visible boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.countries OWNER TO homestead;

--
-- Name: countries_assets; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE public.countries_assets (
    country_id uuid NOT NULL,
    asset_id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.countries_assets OWNER TO homestead;

--
-- Name: default_countries; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE public.default_countries (
    id uuid NOT NULL,
    id_user uuid NOT NULL,
    country character varying(200),
    asset_url character varying(255),
    name_asset character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.default_countries OWNER TO homestead;

--
-- Name: migrations; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO homestead;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: homestead
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO homestead;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: homestead
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO homestead;

--
-- Name: queries; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE public.queries (
    id uuid NOT NULL,
    user_id uuid NOT NULL,
    name character varying(200) NOT NULL,
    type character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT queries_type_check CHECK (((type)::text = ANY ((ARRAY['crop'::character varying, 'fricc'::character varying, 'cost'::character varying])::text[])))
);


ALTER TABLE public.queries OWNER TO homestead;

--
-- Name: queries_assets; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE public.queries_assets (
    query_id uuid NOT NULL,
    asset_id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.queries_assets OWNER TO homestead;

--
-- Name: users; Type: TABLE; Schema: public; Owner: homestead
--

CREATE TABLE public.users (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO homestead;

--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Data for Name: assets; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY public.assets (id, path, description, visible, created_at, updated_at) FROM stdin;
b7315aaa-ceb0-4b00-861c-3eaaa20d9ef7	AD/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
54c86c3a-fa3d-4fe0-a3c2-51eae9a86bf8	AE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
2048c2eb-d919-45d7-8de1-3e392824c1a4	AF/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
56a3f14b-4803-4577-a592-be0057208a16	AG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
d33f9401-3c3b-4aa2-82a1-3904bbea8019	AI/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
8893b610-7c7b-470f-9f2b-78e52395d3bb	AL/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
1454daad-ffeb-4aa9-b18d-b6eef1daa3cf	AM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b9ead3ac-00b1-4fa6-871f-f3120f7fdfae	AO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
8be64e69-0b05-413e-bb27-93977c922351	AQ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3bd32798-7f57-4dd5-b61a-9569339721d8	AR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
332aa8ef-cf0a-48d4-bca5-66d80da673a9	AS/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
e1531e43-859f-4d89-8a5f-97766400087e	AT/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
96eb6e6f-3720-4a40-91b5-aaa751ed0956	AU/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
0bbfd324-f693-475c-af77-ddec6a40b748	AW/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
1c170d17-501e-453e-99f7-aa4463c43b24	AX/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
e81b830f-d896-4ca8-9003-a039eb12957f	AZ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c12350e6-beaf-4e38-94d4-48b93533faa4	BA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
98a672f1-7328-45dc-9781-7c0929d68bd6	BB/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
d8b2f27e-a584-497c-907d-4fb28570bfff	BD/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3624d83b-4d7a-43a9-b051-15318e91292b	BE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a28609ae-8bad-4f06-8364-ddfb19cb91dc	BF/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
974ae650-98f3-4c60-9d66-60e886d24a88	BG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b52a772d-39ac-4519-93e0-e137b8f3c4f2	BH/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
6be218ee-bb5e-46e9-9109-16af17310a60	BI/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
1d0caed7-c3bf-4d21-914c-a5f238fe19f8	BJ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b5a8688c-0cbb-45d9-91e9-0b9f381887d9	BL/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
52f46838-2fd7-40c1-8d17-6f9406c79364	BM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
47690688-db38-46e0-b8e7-05a086357c47	BN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
891ad960-a870-43bc-b6b6-29d8d96486de	BO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a4e9271e-c26b-46d6-a956-86a4b6d42072	BQ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3ca9f257-c3c3-435d-9082-76ee6bf0b468	BR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a03673ab-f410-4f87-81e6-f7b08256d0a2	BS/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
5f3ed07c-6f43-476d-9a92-420c5d4d73f9	BT/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
54a4ee0f-5f96-49e8-a8f8-a33d1c354b44	BV/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
538d36f5-50f9-43c8-a4c5-00230681d08d	BW/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
f63185a2-dc4f-4462-9964-516c62bd04d4	BY/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
39b222f3-27a3-4805-8ce6-85bd7835d2f1	BZ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
f21138ed-2a1a-40e5-9c3c-0c9f66490f40	CA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c1f1eb74-8003-4a12-8c14-462ea9ccecfe	CC/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3b4af40d-de54-4de3-a89a-ad8cf1c894fc	CD/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3d83c55c-49f3-4a56-9029-0c6461d348f8	CF/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
75b8b3f3-c901-40df-92a5-0538db5f4c86	CG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a10f7e47-2c5c-42c6-a9b4-5a5b04db333e	CH/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
00666630-f4a7-4dac-aaf9-787829f2c28c	CI/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
92f46acd-9b41-45d1-a443-7b38a2c0c0cf	CK/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
2a5894df-9ef5-4928-b7d4-4c957cab2ae2	CL/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
7422188e-62aa-4440-9fae-f8edc08cb00f	CM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
7882afaa-b54d-43b6-bacc-738c971b280f	CN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3d738dca-cb18-4c74-ac88-cd98c61ea127	CO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
69a05fa8-7918-4614-97e3-943e410c34d3	CR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
868219b5-08e5-4512-90d1-0a8ffa2c593a	CU/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
0446eaf2-6e02-48bd-aa69-86e643d71c09	CV/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
ee69c535-f970-4fd5-a819-4a3f794b7cd6	CW/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
5d182b64-8111-468e-b01a-8ecde9b66729	CX/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
9a21889a-a805-4934-a120-b5a137ab99dc	CY/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
59f5290a-f3d9-4427-892a-db6f96d14408	CZ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a2a96974-0500-4013-9769-69dfb647d2f1	DE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
2d46c6eb-d82c-4fc2-b8f9-75d535741ef3	DJ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
db23e2cb-3131-4b57-9684-3ff8fb8f5c95	DK/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
30431ccf-749c-44ad-9cb5-26e7274f3c6a	DM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
d5b57a73-7b3f-4a36-9e71-6e7e83ec668f	DO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
9d6e2359-4d5a-413d-865c-d8774805b5b1	DZ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
cdbd9bd7-ff12-4ef0-b51a-335eb2317708	EC/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
47090e4d-4002-4b7e-9e85-e9d00e6d0691	EE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
ce60f115-73ea-4672-847c-69c335d2144c	EG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
8ed4f652-f070-4204-bb1f-76252e522921	EH/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
28b20f50-caf1-40be-b72a-6150ec8863c3	ER/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
61cb2b24-b793-43e8-bfc7-f498e6d3c95b	ES/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
0f0d22ff-f198-4b1c-838b-24bcdabbcb0f	ET/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
f7da3915-684e-44b1-ab30-c832b6f46edf	FI/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
bd43c66f-1dca-47d5-95a8-63c3cb05c3f9	FJ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b924069c-fe33-4ad2-905f-e503d84cdea5	FK/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
6ce38837-e69f-4737-bea4-5e5c30dbb676	FM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
33a4c438-4752-40ef-9408-871e24a2b964	FO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
aaf84def-011a-48d5-b9b9-8e49f379c55b	FR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
0d8219f0-c15f-48bf-b537-5a0fdd88a24c	GA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
f1966f0a-2c2d-4cca-aeb0-69a39dcc4b40	GB/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
85f8f690-4c6a-4ff2-b453-31f872b063a4	GD/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
705da6bd-a98b-4a00-af4f-62263fea241a	GE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
18d335d3-0ad4-4f63-89ce-fab5eaa5ad9f	GF/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b5bfc7e4-8c66-4544-88e6-8bac6756b49c	GG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a0e3f424-b33d-4bb6-b932-aff08f772c6b	GH/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3ed9c0ac-9279-46c7-b216-dc4910980570	GI/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
69d66bce-5bbf-4ba5-aa4d-e8434dd24a79	GL/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
dc70bb4f-f579-48db-ba2a-4b78f0030b11	GM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
46a797f2-3a9c-4a5b-b944-da046289ef1d	GN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
bba16bce-b3e0-40ca-a1bd-573035114e4a	GP/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
1310ac15-63c7-43bf-a648-ebf8455e6fdb	GQ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
31046477-713b-486e-9b6f-91cacbec0557	GR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
63b84988-967d-499c-8e62-d53dfd306cca	GS/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
5fe5cc46-6fbf-41d5-aada-9299c3dd672f	GT/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
f741850f-8e3d-49fe-92c3-c2dfb6ee7709	GU/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
852a5a7f-777f-49ff-bb86-3f2377ec7667	GW/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
1467b6a4-05b0-47dc-b63d-eddbff9b80b5	GY/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
ae67a76e-4ff7-4538-80e6-54cf6eb9b139	HK/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
9bcf03e7-542e-4ce0-95b0-f10326707835	HM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a3ecefb4-f071-4d82-a406-8eb1fe8d2da4	HN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
6e7dec70-3e7a-4e9c-9bdb-155b84e40df7	HR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
dac12cba-a409-4d7f-9e0e-b3a637b6b9bf	HT/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
5fbe9971-2b2c-4022-a6cf-0a28fb2a3be7	HU/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
cd20cba1-3bde-4eeb-a215-9b76b71bba6c	ID/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a3640d4b-f0a4-454a-a53b-23e495acacb3	IE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
0298eb8c-5299-4e92-86ac-ccab3cc552c0	IL/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c75093a0-5014-4ff5-9de5-72972450d3a0	IM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
4cfdf3bf-e2b4-4a9c-b467-6ec1406398aa	IN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3c03505c-f6b4-428f-b18e-6d14513bfcdd	IO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
69d221fa-58c4-4b04-a64d-10208e35c8f2	IQ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
4bfaada9-0015-48c2-aed4-9eb33755ecdf	IR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
7f9e53ed-dcf6-41ea-8675-8cd69b0abb6c	IS/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
fbd5ff81-24ae-4ee4-a09d-9275bd202ca6	IT/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
f505239f-1d26-4123-939c-6588d5285c69	JE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b3644b91-13ba-4f69-ba4f-c999db2d5b52	JM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c6e06c87-15af-47d3-9904-291f51668a80	JO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
8701cbd4-cb8f-4911-9cef-b57b237380dd	JP/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3af259bd-8c31-48aa-8838-1f0433cc67ef	KE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
4b17d29b-1ab4-4b4d-96e9-5c9d2e63420d	KG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
7b1fd9a0-e895-43c3-9bef-516be5eabb0c	KH/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c5066cff-7bad-4d29-a233-7836f2d5a9dd	KI/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
dab4f0ba-8a02-4f21-b029-68411e05ac8c	KM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
87a9ce4a-a0b7-4a07-9a14-53b3d009f2e3	KN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
7ca772be-efa8-45e7-9a5e-972d5c8fe0f0	KP/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c3231105-d139-4ed1-82fe-da0247e332f3	KR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
33f7ec28-cab6-4ad5-b2c5-3f91074df931	KW/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c3cd8077-4b9e-47bb-b209-245efa0b967a	KY/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
af0796db-27a6-4ed0-b865-ec87a2597f38	KZ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
cacaacdb-7bf5-4d1d-928a-e853efd32554	LA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
ad70fa60-650d-471c-9dce-05c0134fe56a	LB/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c6a69446-5104-435f-9727-7d534d731dee	LC/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
312f95e5-08d2-47a3-a7c5-c6ae6979acce	LI/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
bfd18859-c050-4c8e-a283-0f5226537210	LK/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
96c70f34-6b7c-4fbb-9918-eb560203771d	LR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
24736943-dfa7-482c-add7-981d2bbda2ce	LS/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
2598ca64-521a-48c7-a3e3-4c56ed6b586f	LT/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
0d5ea66d-0af6-4c14-b2ed-8a667ffa7713	LU/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
fae46fec-7029-4556-9d3d-26c7839ce532	LV/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
7e159132-d470-41aa-a0a2-723c8cd4262a	LY/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
8abfe1c9-5f2b-463c-bac9-9e298981a43e	MA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3b9e3ce3-39a4-4c52-8f52-3799470a7d75	MC/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
bcb6a6a7-40bb-4651-a9b4-a8d895cdeb57	MD/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
739a8018-bd98-4cd9-946e-5a6bcffac988	ME/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
112e6ee1-bf5c-403a-97a2-f878ad39f5a7	MF/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
fa7fb147-3513-401a-aabf-d7b4b1f21933	MG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
900e98bf-332f-487b-b62e-4b3db157efa9	MH/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
98f09e29-9468-4f34-ac92-7d5e098fa010	MK/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
7c5628cd-c891-43f8-b1de-80e7fbab0099	ML/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
28742833-e107-475a-91e6-9bb3071060ea	MM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
6af68a35-9898-417e-913b-2373c123c8e2	MN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c8eda42f-f213-4b29-9364-1e1fa9fbef17	MO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b050c649-9fc6-411e-9c55-dc626792cbb5	MP/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
26e2969e-89dc-4852-a0b7-3fe3e0c95774	MQ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
12504b94-96f7-4874-a629-245e3e46ca98	MR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
99715863-b908-4e5a-8cd8-e6f1da3af703	MS/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
ed435283-391f-456d-8bdb-3447fc15831a	MT/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b50ac85a-f47a-4c98-8b59-3ea56a898d69	MU/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
8ff12178-b2ea-4df7-81cf-290962cfe03d	MV/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b85d1a0a-540f-4921-8cd1-d2706ee24e19	MW/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
437cbfef-4a89-4a80-b2ce-9027917edb26	MX/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
4d4b4e13-4e04-4857-b4bd-c9d788ef7282	MY/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
780df8d7-f931-44c2-b297-54ccb384362b	MZ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
977d2b0a-6e28-4dbe-a502-b313c3c8577a	NA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
af9e9798-8b33-4e30-9f6e-102ae2e6d407	NC/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
472e06f1-aa32-4ea9-b0e0-a420ba55ddcf	NE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
ae2ea402-447d-4ba4-be33-dec6ea707531	NF/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
ae6ef9d5-7bc1-482e-88d0-8bd948f83112	NG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3810074d-53f6-4fa8-a0d7-94cb0ea058d6	NI/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
d9a69ca4-1e67-4116-8f00-0f16f9cc32a4	NL/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
e3200091-2f22-48d5-be16-2552b859b219	NO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
8c79fca0-8815-4bfc-8ed1-176f8d080fee	NP/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
0a06abd8-64cd-46be-9376-b48b5cc45154	NR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
6606696c-7f1d-400f-addb-643e92535259	NU/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
ada1fc45-cddd-4570-b8e3-28fdea970647	NZ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
431a8018-3e34-47ea-8550-3692d0c4d231	OM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
763fd192-1e06-4b96-b144-32c78c3adc06	PA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
d3624fdc-2e6d-418c-8c86-a05eca204f6a	PE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
53e4cbd1-e642-45fd-a6ee-3d82c70b96da	PF/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
abdc4e5e-d322-46a1-aa39-3c7c45737031	PG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
5ea0d6ec-6b99-4124-b358-be1363480bc0	PH/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
dfc3dc50-8838-48d1-81d2-e15ca56b99a6	PK/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a3766405-883c-4cff-8167-b43e65d41378	PL/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3e3cb4e7-b763-4502-82a6-2ca2c7483b34	PM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
416444c2-a5a3-4fbe-985b-2bbd6bb8aedc	PN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
fa8655c9-e8c5-4af4-90eb-0da1ab15b623	PR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
53657097-5427-4de5-99ba-2ff0c76957e3	PS/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
129aeb61-f332-440a-8bc4-c36f65f2ebb6	PT/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
54e167db-c584-42c5-909d-bb85b007e85a	PW/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
d6385ef3-148d-4236-bb2b-d791785a75af	PY/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
71f4a3d4-4b3c-4890-a774-ee934499b160	QA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
5f02bc94-4b2a-4a7f-9f02-0f6086108297	RE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b300c879-efd6-4b91-a9fa-f0993c7c32fe	RO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
596822dc-1de5-4b55-9d60-065201bf8820	RS/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a7969b22-5803-4fd6-987a-0255c139fdad	RU/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
5b6c2b95-acee-49bb-8484-89147cf8d259	RW/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
83c514bc-7b9a-4eda-889c-86d0ea7fdb67	SA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
48075570-149c-487b-8dd0-d1e2f0665311	SB/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
2cbd44df-667f-4d69-b4e8-488f4ac70864	SC/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
bcfeed5b-4ea4-4851-90cd-7e8073d71887	SD/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
8b5cd769-d77a-4b62-a9b7-fc444e2d1527	SE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
26f9f54a-72a3-486d-8051-036bf00c1a12	SG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
ea50abba-b2dd-4402-a950-89e80236f7eb	SH/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
5fc509e0-1c7b-4906-9425-d409a88be73e	SI/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
2d137ee8-5085-48e6-a601-a57c12fedf97	SJ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a7c57404-9d37-4e96-8fe6-545efc6ec781	SK/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
cd7fe46b-3708-41ff-80c3-259c7bcb55b2	SL/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
946d1910-62b6-4013-a274-a8988883938e	SM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
4ff60c7c-d2e9-4de1-90c4-6f2154798cf9	SN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
1203db35-e612-4eb2-ae5a-10db0b9a9981	SO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
4e7577e6-207c-42aa-8b97-aa9e0b407663	SR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
88371aea-1aa2-47af-aabd-fe1b8a1531a2	SS/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
ee3a5145-7945-436d-8da2-e91ea386ceff	ST/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
23fe60c4-5b0a-40bf-8381-cf73062e5351	SV/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
e504c0f3-2510-43e9-82ab-89624e340f32	SX/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
0aac3f44-3ec5-4d9f-8b3b-1e45283894f8	SY/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
8fb0ba30-05fd-4626-ba1a-ce078d1b21ab	SZ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
6226c46c-2abe-40db-bd36-6f393fd42944	TC/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
65a7f1e6-7ec7-42aa-8abf-f7ee82bac73a	TD/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
7273c9ef-98d6-4dc8-897d-271fa5ea228f	TF/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
9a6a6d7b-b334-4a83-a2ac-0e732dfb26a0	TG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
aa388a07-2f3f-4050-aea8-d97b00edde28	TH/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c4f6f344-0d2b-428c-99fa-20c44220fd38	TJ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
7a5dc7cc-b9e7-4d8e-9ff5-a2d863e42464	TK/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b8d2857d-8fea-45cc-9a6a-7c2904db247e	TL/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
f6fe3312-646d-4812-b9e2-b5e8bed3e41a	TM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
c4a05c90-3c31-4b0b-b187-518fe4716e0f	TN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
1bd60382-2d0d-4564-9f7e-0efa18e69890	TO/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
46d072e3-5d35-454a-a4f8-e3466967da4a	TR/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3803f585-cab6-4f7b-8743-e0cff10ab5e1	TT/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
42709f6a-2e49-437c-a690-7a816ae29b4e	TV/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
217c6107-3b05-417c-a8f6-eea08edb42e2	TW/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
6d83ff69-3d1d-4dd2-8e94-1cd1e9837287	TZ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
798107d0-ca28-4aea-884c-1b6a58209742	UA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
7ee0777b-9f5d-4fc7-a05d-367528be53e7	UG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
923f7058-0d00-4e32-ae5c-006a0c2b52c2	UM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
74b4d92f-4de2-459e-a28a-9c04507ca427	US/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
afc07d6f-a9f4-4ca8-82ca-03affaf1bf4d	UY/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
b86ae4bb-cab6-42f7-8f9e-4135f203880e	UZ/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
25ffbfb2-379d-45a5-82d7-36baff47a850	VA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
01f859ba-16d3-4829-9478-c5ef07033b41	VC/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
1549c9b2-0643-4e44-842c-c0652fbc6ac3	VE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
92cb717c-74c6-4bc4-92ed-d2d061eb2c20	VG/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
bb890818-b144-4806-a6ff-9e52921efbbb	VI/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
d65bac50-4271-4000-9f03-4ce6a486410a	VN/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
a4385650-7b93-4f58-b98a-6362c3f96413	VU/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
f9b0bbf8-b208-4f48-aa96-e9788dfa64df	WF/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3b870512-a2d1-4799-89b2-cd3144a330c8	WS/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
4eb07dd8-8252-4874-bb46-b2938076ea38	YE/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
f890b587-3908-4db6-8618-b70d7f49e583	YT/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
e2ad87be-4b5a-4b0b-b22f-6c88cf2aff0a	ZA/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
8958aa3a-f971-4958-b480-1c03c68eb645	ZM/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
3ba53f22-aafe-43e7-a7f9-f3c8b098ed6f	ZW/DEM_c	Digital Elevation Model	t	2019-12-08 14:06:41	2019-12-08 14:06:41
\.


--
-- Data for Name: countries; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY public.countries (id, name, country_code, latitude, longitude, zoom, tier, visible, created_at, updated_at) FROM stdin;
54c86c3a-fa3d-4fe0-a3c2-51eae9a86bf8	United Arab Emirates	AE	23.4240760	53.8478180	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
2048c2eb-d919-45d7-8de1-3e392824c1a4	Afghanistan	AF	33.9391100	67.7099530	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
56a3f14b-4803-4577-a592-be0057208a16	Antigua and Barbuda	AG	17.0608160	-61.7964280	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
d33f9401-3c3b-4aa2-82a1-3904bbea8019	Anguilla	AI	18.2205540	-63.0686150	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
8893b610-7c7b-470f-9f2b-78e52395d3bb	Albania	AL	41.1533320	20.1683310	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
1454daad-ffeb-4aa9-b18d-b6eef1daa3cf	Armenia	AM	40.0690990	45.0381890	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
b9ead3ac-00b1-4fa6-871f-f3120f7fdfae	Angola	AO	-11.2026920	17.8738870	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
8be64e69-0b05-413e-bb27-93977c922351	Antarctica	AQ	-75.2509730	-0.0713890	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
3bd32798-7f57-4dd5-b61a-9569339721d8	Argentina	AR	-38.4160970	-63.6166720	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
332aa8ef-cf0a-48d4-bca5-66d80da673a9	American Samoa	AS	-14.2709720	-170.1322170	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
e1531e43-859f-4d89-8a5f-97766400087e	Austria	AT	47.5162310	14.5500720	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
96eb6e6f-3720-4a40-91b5-aaa751ed0956	Australia	AU	-25.2743980	133.7751360	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
0bbfd324-f693-475c-af77-ddec6a40b748	Aruba	AW	12.5211100	-69.9683380	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
1c170d17-501e-453e-99f7-aa4463c43b24	Åland Islands	AX	\N	\N	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
e81b830f-d896-4ca8-9003-a039eb12957f	Azerbaijan	AZ	40.1431050	47.5769270	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
c12350e6-beaf-4e38-94d4-48b93533faa4	Bosnia and Herzegovina	BA	43.9158860	17.6790760	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
98a672f1-7328-45dc-9781-7c0929d68bd6	Barbados	BB	13.1938870	-59.5431980	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
d8b2f27e-a584-497c-907d-4fb28570bfff	Bangladesh	BD	23.6849940	90.3563310	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
3624d83b-4d7a-43a9-b051-15318e91292b	Belgium	BE	50.5038870	4.4699360	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
a28609ae-8bad-4f06-8364-ddfb19cb91dc	Burkina Faso	BF	12.2383330	-1.5615930	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
974ae650-98f3-4c60-9d66-60e886d24a88	Bulgaria	BG	42.7338830	25.4858300	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
b52a772d-39ac-4519-93e0-e137b8f3c4f2	Bahrain	BH	25.9304140	50.6377720	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
6be218ee-bb5e-46e9-9109-16af17310a60	Burundi	BI	-3.3730560	29.9188860	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
1d0caed7-c3bf-4d21-914c-a5f238fe19f8	Benin	BJ	9.3076900	2.3158340	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
b5a8688c-0cbb-45d9-91e9-0b9f381887d9	Saint Barthelemy	BL	\N	\N	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
52f46838-2fd7-40c1-8d17-6f9406c79364	Bermuda	BM	32.3213840	-64.7573700	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
47690688-db38-46e0-b8e7-05a086357c47	Brunei Darussalam	BN	4.5352770	114.7276690	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
891ad960-a870-43bc-b6b6-29d8d96486de	Bolivia, Plurinational State of	BO	-16.2901540	-63.5886530	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
a4e9271e-c26b-46d6-a956-86a4b6d42072	Bonaire, Sint Eustatius and Saba	BQ	\N	\N	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
3ca9f257-c3c3-435d-9082-76ee6bf0b468	Brazil	BR	-14.2350040	-51.9252800	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
a03673ab-f410-4f87-81e6-f7b08256d0a2	Bahamas	BS	25.0342800	-77.3962800	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
5f3ed07c-6f43-476d-9a92-420c5d4d73f9	Bhutan	BT	27.5141620	90.4336010	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
54a4ee0f-5f96-49e8-a8f8-a33d1c354b44	Bouvet Island	BV	-54.4231990	3.4131940	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
538d36f5-50f9-43c8-a4c5-00230681d08d	Botswana	BW	-22.3284740	24.6848660	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
f63185a2-dc4f-4462-9964-516c62bd04d4	Belarus	BY	53.7098070	27.9533890	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
39b222f3-27a3-4805-8ce6-85bd7835d2f1	Belize	BZ	17.1898770	-88.4976500	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
f21138ed-2a1a-40e5-9c3c-0c9f66490f40	Canada	CA	56.1303660	-106.3467710	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
c1f1eb74-8003-4a12-8c14-462ea9ccecfe	Cocos (Keeling) Islands	CC	-12.1641650	96.8709560	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
3b4af40d-de54-4de3-a89a-ad8cf1c894fc	Congo, the Democratic Republic of the	CD	-4.0383330	21.7586640	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
3d83c55c-49f3-4a56-9029-0c6461d348f8	Central African Republic	CF	6.6111110	20.9394440	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
75b8b3f3-c901-40df-92a5-0538db5f4c86	Congo	CG	-0.2280210	15.8276590	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
a10f7e47-2c5c-42c6-a9b4-5a5b04db333e	Switzerland	CH	46.8181880	8.2275120	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
00666630-f4a7-4dac-aaf9-787829f2c28c	Cote d'Ivoire	CI	7.5399890	-5.5470800	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
92f46acd-9b41-45d1-a443-7b38a2c0c0cf	Cook Islands	CK	-21.2367360	-159.7776710	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
2a5894df-9ef5-4928-b7d4-4c957cab2ae2	Chile	CL	-35.6751470	-71.5429690	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
7422188e-62aa-4440-9fae-f8edc08cb00f	Cameroon	CM	7.3697220	12.3547220	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
7882afaa-b54d-43b6-bacc-738c971b280f	China	CN	35.8616600	104.1953970	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
3d738dca-cb18-4c74-ac88-cd98c61ea127	Colombia	CO	4.5708680	-74.2973330	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
69a05fa8-7918-4614-97e3-943e410c34d3	Costa Rica	CR	9.7489170	-83.7534280	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
868219b5-08e5-4512-90d1-0a8ffa2c593a	Cuba	CU	21.5217570	-77.7811670	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
0446eaf2-6e02-48bd-aa69-86e643d71c09	Cape Verde	CV	16.0020820	-24.0131970	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
ee69c535-f970-4fd5-a819-4a3f794b7cd6	Curaçao	CW	\N	\N	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
5d182b64-8111-468e-b01a-8ecde9b66729	Christmas Island	CX	-10.4475250	105.6904490	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
9a21889a-a805-4934-a120-b5a137ab99dc	Cyprus	CY	35.1264130	33.4298590	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
59f5290a-f3d9-4427-892a-db6f96d14408	Czech Republic	CZ	49.8174920	15.4729620	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
a2a96974-0500-4013-9769-69dfb647d2f1	Germany	DE	51.1656910	10.4515260	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
2d46c6eb-d82c-4fc2-b8f9-75d535741ef3	Djibouti	DJ	11.8251380	42.5902750	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
db23e2cb-3131-4b57-9684-3ff8fb8f5c95	Denmark	DK	56.2639200	9.5017850	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
30431ccf-749c-44ad-9cb5-26e7274f3c6a	Dominica	DM	15.4149990	-61.3709760	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
d5b57a73-7b3f-4a36-9e71-6e7e83ec668f	Dominican Republic	DO	18.7356930	-70.1626510	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
9d6e2359-4d5a-413d-865c-d8774805b5b1	Algeria	DZ	28.0338860	1.6596260	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
cdbd9bd7-ff12-4ef0-b51a-335eb2317708	Ecuador	EC	-1.8312390	-78.1834060	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
47090e4d-4002-4b7e-9e85-e9d00e6d0691	Estonia	EE	58.5952720	25.0136070	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
ce60f115-73ea-4672-847c-69c335d2144c	Egypt	EG	26.8205530	30.8024980	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
8ed4f652-f070-4204-bb1f-76252e522921	Western Sahara	EH	24.2155270	-12.8858340	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
28b20f50-caf1-40be-b72a-6150ec8863c3	Eritrea	ER	15.1793840	39.7823340	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
61cb2b24-b793-43e8-bfc7-f498e6d3c95b	Spain	ES	40.4636670	-3.7492200	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
0f0d22ff-f198-4b1c-838b-24bcdabbcb0f	Ethiopia	ET	9.1450000	40.4896730	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
f7da3915-684e-44b1-ab30-c832b6f46edf	Finland	FI	61.9241100	25.7481510	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
bd43c66f-1dca-47d5-95a8-63c3cb05c3f9	Fiji	FJ	-16.5781930	179.4144130	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
b924069c-fe33-4ad2-905f-e503d84cdea5	Falkland Islands (Malvinas)	FK	-51.7962530	-59.5236130	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
6ce38837-e69f-4737-bea4-5e5c30dbb676	Micronesia, Federated States of	FM	7.4255540	150.5508120	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
33a4c438-4752-40ef-9408-871e24a2b964	Faroe Islands	FO	61.8926350	-6.9118060	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
aaf84def-011a-48d5-b9b9-8e49f379c55b	France	FR	46.2276380	2.2137490	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
0d8219f0-c15f-48bf-b537-5a0fdd88a24c	Gabon	GA	-0.8036890	11.6094440	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
f1966f0a-2c2d-4cca-aeb0-69a39dcc4b40	United Kingdom	GB	55.3780510	-3.4359730	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
85f8f690-4c6a-4ff2-b453-31f872b063a4	Grenada	GD	12.2627760	-61.6041710	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
705da6bd-a98b-4a00-af4f-62263fea241a	Georgia	GE	42.3154070	43.3568920	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
18d335d3-0ad4-4f63-89ce-fab5eaa5ad9f	French Guiana	GF	3.9338890	-53.1257820	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
b5bfc7e4-8c66-4544-88e6-8bac6756b49c	Guernsey	GG	49.4656910	-2.5852780	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
a0e3f424-b33d-4bb6-b932-aff08f772c6b	Ghana	GH	7.9465270	-1.0231940	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
3ed9c0ac-9279-46c7-b216-dc4910980570	Gibraltar	GI	36.1377410	-5.3453740	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
69d66bce-5bbf-4ba5-aa4d-e8434dd24a79	Greenland	GL	71.7069360	-42.6043030	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
dc70bb4f-f579-48db-ba2a-4b78f0030b11	Gambia	GM	13.4431820	-15.3101390	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
46a797f2-3a9c-4a5b-b944-da046289ef1d	Guinea	GN	9.9455870	-9.6966450	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
bba16bce-b3e0-40ca-a1bd-573035114e4a	Guadeloupe	GP	16.9959710	-62.0676410	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
1310ac15-63c7-43bf-a648-ebf8455e6fdb	Equatorial Guinea	GQ	1.6508010	10.2678950	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
31046477-713b-486e-9b6f-91cacbec0557	Greece	GR	39.0742080	21.8243120	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
63b84988-967d-499c-8e62-d53dfd306cca	South Georgia and the South Sandwich Islands	GS	-54.4295790	-36.5879090	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
5fe5cc46-6fbf-41d5-aada-9299c3dd672f	Guatemala	GT	15.7834710	-90.2307590	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
f741850f-8e3d-49fe-92c3-c2dfb6ee7709	Guam	GU	13.4443040	144.7937310	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
852a5a7f-777f-49ff-bb86-3f2377ec7667	Guinea-Bissau	GW	11.8037490	-15.1804130	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
1467b6a4-05b0-47dc-b63d-eddbff9b80b5	Guyana	GY	4.8604160	-58.9301800	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
ae67a76e-4ff7-4538-80e6-54cf6eb9b139	Hong Kong	HK	22.3964280	114.1094970	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
9bcf03e7-542e-4ce0-95b0-f10326707835	Heard Island and McDonald Islands	HM	-53.0818100	73.5041580	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
a3ecefb4-f071-4d82-a406-8eb1fe8d2da4	Honduras	HN	15.1999990	-86.2419050	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
6e7dec70-3e7a-4e9c-9bdb-155b84e40df7	Croatia	HR	45.1000000	15.2000000	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
dac12cba-a409-4d7f-9e0e-b3a637b6b9bf	Haiti	HT	18.9711870	-72.2852150	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
5fbe9971-2b2c-4022-a6cf-0a28fb2a3be7	Hungary	HU	47.1624940	19.5033040	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
cd20cba1-3bde-4eeb-a215-9b76b71bba6c	Indonesia	ID	-0.7892750	113.9213270	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
a3640d4b-f0a4-454a-a53b-23e495acacb3	Ireland	IE	53.4129100	-8.2438900	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
0298eb8c-5299-4e92-86ac-ccab3cc552c0	Israel	IL	31.0460510	34.8516120	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
c75093a0-5014-4ff5-9de5-72972450d3a0	Isle of Man	IM	54.2361070	-4.5480560	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
4cfdf3bf-e2b4-4a9c-b467-6ec1406398aa	India	IN	20.5936840	78.9628800	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
3c03505c-f6b4-428f-b18e-6d14513bfcdd	British Indian Ocean Territory	IO	-6.3431940	71.8765190	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
69d221fa-58c4-4b04-a64d-10208e35c8f2	Iraq	IQ	33.2231910	43.6792910	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
4bfaada9-0015-48c2-aed4-9eb33755ecdf	Iran, Islamic Republic of	IR	32.4279080	53.6880460	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
7f9e53ed-dcf6-41ea-8675-8cd69b0abb6c	Iceland	IS	64.9630510	-19.0208350	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
fbd5ff81-24ae-4ee4-a09d-9275bd202ca6	Italy	IT	41.8719400	12.5673800	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
f505239f-1d26-4123-939c-6588d5285c69	Jersey	JE	49.2144390	-2.1312500	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
b3644b91-13ba-4f69-ba4f-c999db2d5b52	Jamaica	JM	18.1095810	-77.2975080	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
c6e06c87-15af-47d3-9904-291f51668a80	Jordan	JO	30.5851640	36.2384140	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
8701cbd4-cb8f-4911-9cef-b57b237380dd	Japan	JP	36.2048240	138.2529240	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
3af259bd-8c31-48aa-8838-1f0433cc67ef	Kenya	KE	-0.0235590	37.9061930	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
4b17d29b-1ab4-4b4d-96e9-5c9d2e63420d	Kyrgyzstan	KG	41.2043800	74.7660980	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
7b1fd9a0-e895-43c3-9bef-516be5eabb0c	Cambodia	KH	12.5656790	104.9909630	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
c5066cff-7bad-4d29-a233-7836f2d5a9dd	Kiribati	KI	-3.3704170	-168.7340390	8	1 	f	2019-12-08 14:06:40	2019-12-08 14:06:40
dab4f0ba-8a02-4f21-b029-68411e05ac8c	Comoros	KM	-11.8750010	43.8722190	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
87a9ce4a-a0b7-4a07-9a14-53b3d009f2e3	Saint Kitts and Nevis	KN	17.3578220	-62.7829980	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
7ca772be-efa8-45e7-9a5e-972d5c8fe0f0	Korea, Democratic People's Republic of	KP	40.3398520	127.5100930	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
c3231105-d139-4ed1-82fe-da0247e332f3	Korea, Republic of	KR	35.9077570	127.7669220	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
33f7ec28-cab6-4ad5-b2c5-3f91074df931	Kuwait	KW	29.3116600	47.4817660	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
c3cd8077-4b9e-47bb-b209-245efa0b967a	Cayman Islands	KY	19.5134690	-80.5669560	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
af0796db-27a6-4ed0-b865-ec87a2597f38	Kazakhstan	KZ	48.0195730	66.9236840	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
cacaacdb-7bf5-4d1d-928a-e853efd32554	Lao People's Democratic Republic	LA	19.8562700	102.4954960	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
ad70fa60-650d-471c-9dce-05c0134fe56a	Lebanon	LB	33.8547210	35.8622850	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
c6a69446-5104-435f-9727-7d534d731dee	Saint Lucia	LC	13.9094440	-60.9788930	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
312f95e5-08d2-47a3-a7c5-c6ae6979acce	Liechtenstein	LI	47.1660000	9.5553730	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
bfd18859-c050-4c8e-a283-0f5226537210	Sri Lanka	LK	7.8730540	80.7717970	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
96c70f34-6b7c-4fbb-9918-eb560203771d	Liberia	LR	6.4280550	-9.4294990	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
24736943-dfa7-482c-add7-981d2bbda2ce	Lesotho	LS	-29.6099880	28.2336080	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
2598ca64-521a-48c7-a3e3-4c56ed6b586f	Lithuania	LT	55.1694380	23.8812750	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
0d5ea66d-0af6-4c14-b2ed-8a667ffa7713	Luxembourg	LU	49.8152730	6.1295830	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
fae46fec-7029-4556-9d3d-26c7839ce532	Latvia	LV	56.8796350	24.6031890	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
7e159132-d470-41aa-a0a2-723c8cd4262a	Libya	LY	26.3351000	17.2283310	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
8abfe1c9-5f2b-463c-bac9-9e298981a43e	Morocco	MA	31.7917020	-7.0926200	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
3b9e3ce3-39a4-4c52-8f52-3799470a7d75	Monaco	MC	43.7502980	7.4128410	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
bcb6a6a7-40bb-4651-a9b4-a8d895cdeb57	Moldova, Republic of	MD	47.4116310	28.3698850	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
739a8018-bd98-4cd9-946e-5a6bcffac988	Montenegro	ME	42.7086780	19.3743900	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
112e6ee1-bf5c-403a-97a2-f878ad39f5a7	Saint Martin (French Part)	MF	\N	\N	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
fa7fb147-3513-401a-aabf-d7b4b1f21933	Madagascar	MG	-18.7669470	46.8691070	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
900e98bf-332f-487b-b62e-4b3db157efa9	Marshall Islands	MH	7.1314740	171.1844780	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
98f09e29-9468-4f34-ac92-7d5e098fa010	North Macedonia	MK	41.6086350	21.7452750	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
7c5628cd-c891-43f8-b1de-80e7fbab0099	Mali	ML	17.5706920	-3.9961660	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
28742833-e107-475a-91e6-9bb3071060ea	Myanmar	MM	21.9139650	95.9562230	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
6af68a35-9898-417e-913b-2373c123c8e2	Mongolia	MN	46.8624960	103.8466560	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
c8eda42f-f213-4b29-9364-1e1fa9fbef17	Macao	MO	22.1987450	113.5438730	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
b050c649-9fc6-411e-9c55-dc626792cbb5	Northern Mariana Islands	MP	17.3308300	145.3846900	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
26e2969e-89dc-4852-a0b7-3fe3e0c95774	Martinique	MQ	14.6415280	-61.0241740	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
12504b94-96f7-4874-a629-245e3e46ca98	Mauritania	MR	21.0078900	-10.9408350	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
99715863-b908-4e5a-8cd8-e6f1da3af703	Montserrat	MS	16.7424980	-62.1873660	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
ed435283-391f-456d-8bdb-3447fc15831a	Malta	MT	35.9374960	14.3754160	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
b50ac85a-f47a-4c98-8b59-3ea56a898d69	Mauritius	MU	-20.3484040	57.5521520	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
8ff12178-b2ea-4df7-81cf-290962cfe03d	Maldives	MV	3.2027780	73.2206800	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
b85d1a0a-540f-4921-8cd1-d2706ee24e19	Malawi	MW	-13.2543080	34.3015250	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
4d4b4e13-4e04-4857-b4bd-c9d788ef7282	Malaysia	MY	4.2104840	101.9757660	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
780df8d7-f931-44c2-b297-54ccb384362b	Mozambique	MZ	-18.6656950	35.5295620	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
977d2b0a-6e28-4dbe-a502-b313c3c8577a	Namibia	NA	-22.9576400	18.4904100	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
af9e9798-8b33-4e30-9f6e-102ae2e6d407	New Caledonia	NC	-20.9043050	165.6180420	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
472e06f1-aa32-4ea9-b0e0-a420ba55ddcf	Niger	NE	17.6077890	8.0816660	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
ae2ea402-447d-4ba4-be33-dec6ea707531	Norfolk Island	NF	-29.0408350	167.9547120	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
ae6ef9d5-7bc1-482e-88d0-8bd948f83112	Nigeria	NG	9.0819990	8.6752770	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
3810074d-53f6-4fa8-a0d7-94cb0ea058d6	Nicaragua	NI	12.8654160	-85.2072290	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
d9a69ca4-1e67-4116-8f00-0f16f9cc32a4	Netherlands	NL	52.1326330	5.2912660	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
e3200091-2f22-48d5-be16-2552b859b219	Norway	NO	60.4720240	8.4689460	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
8c79fca0-8815-4bfc-8ed1-176f8d080fee	Nepal	NP	28.3948570	84.1240080	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
0a06abd8-64cd-46be-9376-b48b5cc45154	Nauru	NR	-0.5227780	166.9315030	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
6606696c-7f1d-400f-addb-643e92535259	Niue	NU	-19.0544450	-169.8672330	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
ada1fc45-cddd-4570-b8e3-28fdea970647	New Zealand	NZ	-40.9005570	174.8859710	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
431a8018-3e34-47ea-8550-3692d0c4d231	Oman	OM	21.5125830	55.9232550	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
763fd192-1e06-4b96-b144-32c78c3adc06	Panama	PA	8.5379810	-80.7821270	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
53e4cbd1-e642-45fd-a6ee-3d82c70b96da	French Polynesia	PF	-17.6797420	-149.4068430	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
abdc4e5e-d322-46a1-aa39-3c7c45737031	Papua New Guinea	PG	-6.3149930	143.9555500	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
5ea0d6ec-6b99-4124-b358-be1363480bc0	Philippines	PH	12.8797210	121.7740170	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
dfc3dc50-8838-48d1-81d2-e15ca56b99a6	Pakistan	PK	30.3753210	69.3451160	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
a3766405-883c-4cff-8167-b43e65d41378	Poland	PL	51.9194380	19.1451360	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
3e3cb4e7-b763-4502-82a6-2ca2c7483b34	Saint Pierre and Miquelon	PM	46.9419360	-56.2711100	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
416444c2-a5a3-4fbe-985b-2bbd6bb8aedc	Pitcairn	PN	-24.7036150	-127.4393080	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
fa8655c9-e8c5-4af4-90eb-0da1ab15b623	Puerto Rico	PR	18.2208330	-66.5901490	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
53657097-5427-4de5-99ba-2ff0c76957e3	Palestinian, State of	PS	31.9521620	35.2331540	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
129aeb61-f332-440a-8bc4-c36f65f2ebb6	Portugal	PT	39.3998720	-8.2244540	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
54e167db-c584-42c5-909d-bb85b007e85a	Palau	PW	7.5149800	134.5825200	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
d6385ef3-148d-4236-bb2b-d791785a75af	Paraguay	PY	-23.4425030	-58.4438320	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
71f4a3d4-4b3c-4890-a774-ee934499b160	Qatar	QA	25.3548260	51.1838840	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
5f02bc94-4b2a-4a7f-9f02-0f6086108297	Réunion	RE	-21.1151410	55.5363840	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
b300c879-efd6-4b91-a9fa-f0993c7c32fe	Romania	RO	45.9431610	24.9667600	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
596822dc-1de5-4b55-9d60-065201bf8820	Serbia	RS	44.0165210	21.0058590	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
a7969b22-5803-4fd6-987a-0255c139fdad	Russian Federation	RU	61.5240100	105.3187560	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
5b6c2b95-acee-49bb-8484-89147cf8d259	Rwanda	RW	-1.9402780	29.8738880	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
83c514bc-7b9a-4eda-889c-86d0ea7fdb67	Saudi Arabia	SA	23.8859420	45.0791620	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
48075570-149c-487b-8dd0-d1e2f0665311	Solomon Islands	SB	-9.6457100	160.1561940	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
2cbd44df-667f-4d69-b4e8-488f4ac70864	Seychelles	SC	-4.6795740	55.4919770	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
bcfeed5b-4ea4-4851-90cd-7e8073d71887	Sudan	SD	12.8628070	30.2176360	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
8b5cd769-d77a-4b62-a9b7-fc444e2d1527	Sweden	SE	60.1281610	18.6435010	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
26f9f54a-72a3-486d-8051-036bf00c1a12	Singapore	SG	1.3520830	103.8198360	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
ea50abba-b2dd-4402-a950-89e80236f7eb	Saint Helena, Ascension and Tristan da Cunha	SH	-24.1434740	-10.0306960	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
5fc509e0-1c7b-4906-9425-d409a88be73e	Slovenia	SI	46.1512410	14.9954630	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
2d137ee8-5085-48e6-a601-a57c12fedf97	Svalbard and Jan Mayen	SJ	77.5536040	23.6702720	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
a7c57404-9d37-4e96-8fe6-545efc6ec781	Slovakia	SK	48.6690260	19.6990240	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
cd7fe46b-3708-41ff-80c3-259c7bcb55b2	Sierra Leone	SL	8.4605550	-11.7798890	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
946d1910-62b6-4013-a274-a8988883938e	San Marino	SM	43.9423600	12.4577770	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
4ff60c7c-d2e9-4de1-90c4-6f2154798cf9	Senegal	SN	14.4974010	-14.4523620	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
1203db35-e612-4eb2-ae5a-10db0b9a9981	Somalia	SO	5.1521490	46.1996160	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
4e7577e6-207c-42aa-8b97-aa9e0b407663	Suriname	SR	3.9193050	-56.0277830	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
88371aea-1aa2-47af-aabd-fe1b8a1531a2	South Sudan	SS	\N	\N	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
ee3a5145-7945-436d-8da2-e91ea386ceff	Sao Tome and Principe	ST	0.1863600	6.6130810	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
23fe60c4-5b0a-40bf-8381-cf73062e5351	El Salvador	SV	13.7941850	-88.8965300	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
e504c0f3-2510-43e9-82ab-89624e340f32	Sint Maarten (Dutch Part)	SX	\N	\N	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
0aac3f44-3ec5-4d9f-8b3b-1e45283894f8	Syrian Arab Republic	SY	34.8020750	38.9968150	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
8fb0ba30-05fd-4626-ba1a-ce078d1b21ab	Swaziland	SZ	-26.5225030	31.4658660	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
6226c46c-2abe-40db-bd36-6f393fd42944	Turks and Caicos Islands	TC	21.6940250	-71.7979280	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
65a7f1e6-7ec7-42aa-8abf-f7ee82bac73a	Chad	TD	15.4541660	18.7322070	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
7273c9ef-98d6-4dc8-897d-271fa5ea228f	French Southern Territories	TF	-49.2803660	69.3485570	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
9a6a6d7b-b334-4a83-a2ac-0e732dfb26a0	Togo	TG	8.6195430	0.8247820	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
aa388a07-2f3f-4050-aea8-d97b00edde28	Thailand	TH	15.8700320	100.9925410	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
c4f6f344-0d2b-428c-99fa-20c44220fd38	Tajikistan	TJ	38.8610340	71.2760930	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
7a5dc7cc-b9e7-4d8e-9ff5-a2d863e42464	Tokelau	TK	-8.9673630	-171.8558810	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
b8d2857d-8fea-45cc-9a6a-7c2904db247e	Timor-Leste	TL	-8.8742170	125.7275390	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
f6fe3312-646d-4812-b9e2-b5e8bed3e41a	Turkmenistan	TM	38.9697190	59.5562780	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
c4a05c90-3c31-4b0b-b187-518fe4716e0f	Tunisia	TN	33.8869170	9.5374990	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
1bd60382-2d0d-4564-9f7e-0efa18e69890	Tonga	TO	-21.1789860	-175.1982420	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
46d072e3-5d35-454a-a4f8-e3466967da4a	Turkey	TR	38.9637450	35.2433220	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
3803f585-cab6-4f7b-8743-e0cff10ab5e1	Trinidad and Tobago	TT	10.6918030	-61.2225030	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
42709f6a-2e49-437c-a690-7a816ae29b4e	Tuvalu	TV	-7.1095350	177.6493300	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
217c6107-3b05-417c-a8f6-eea08edb42e2	Taiwan, Province of China	TW	23.6978100	120.9605150	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
6d83ff69-3d1d-4dd2-8e94-1cd1e9837287	Tanzania, United Republic of	TZ	-6.3690280	34.8888220	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
437cbfef-4a89-4a80-b2ce-9027917edb26	Mexico	MX	23.6345010	-102.5527840	8	2 	t	2019-12-08 14:06:41	2020-01-15 12:38:46
798107d0-ca28-4aea-884c-1b6a58209742	Ukraine	UA	48.3794330	31.1655800	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
7ee0777b-9f5d-4fc7-a05d-367528be53e7	Uganda	UG	1.3733330	32.2902750	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
923f7058-0d00-4e32-ae5c-006a0c2b52c2	United States Minor Outlying Islands	UM	\N	\N	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
74b4d92f-4de2-459e-a28a-9c04507ca427	United States	US	37.0902400	-95.7128910	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
afc07d6f-a9f4-4ca8-82ca-03affaf1bf4d	Uruguay	UY	-32.5227790	-55.7658350	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
b86ae4bb-cab6-42f7-8f9e-4135f203880e	Uzbekistan	UZ	41.3774910	64.5852620	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
25ffbfb2-379d-45a5-82d7-36baff47a850	Holy See (Vatican City State)	VA	41.9029160	12.4533890	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
01f859ba-16d3-4829-9478-c5ef07033b41	Saint Vincent and the Grenadines	VC	12.9843050	-61.2872280	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
1549c9b2-0643-4e44-842c-c0652fbc6ac3	Venezuela, Bolivarian Republic of	VE	6.4237500	-66.5897300	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
92cb717c-74c6-4bc4-92ed-d2d061eb2c20	Virgin Islands, British	VG	18.4206950	-64.6399680	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
bb890818-b144-4806-a6ff-9e52921efbbb	Virgin Islands, U.S.	VI	18.3357650	-64.8963350	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
d65bac50-4271-4000-9f03-4ce6a486410a	Viet Nam	VN	14.0583240	108.2771990	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
a4385650-7b93-4f58-b98a-6362c3f96413	Vanuatu	VU	-15.3767060	166.9591580	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
f9b0bbf8-b208-4f48-aa96-e9788dfa64df	Wallis and Futuna	WF	-13.7687520	-177.1560970	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
3b870512-a2d1-4799-89b2-cd3144a330c8	Samoa	WS	-13.7590290	-172.1046290	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
4eb07dd8-8252-4874-bb46-b2938076ea38	Yemen	YE	15.5527270	48.5163880	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
f890b587-3908-4db6-8618-b70d7f49e583	Mayotte	YT	-12.8275000	45.1662440	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
e2ad87be-4b5a-4b0b-b22f-6c88cf2aff0a	South Africa	ZA	-30.5594820	22.9375060	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
3ba53f22-aafe-43e7-a7f9-f3c8b098ed6f	Zimbabwe	ZW	-19.0154380	29.1548570	8	1 	f	2019-12-08 14:06:41	2019-12-08 14:06:41
b7315aaa-ceb0-4b00-861c-3eaaa20d9ef7	Andorra	AD	42.5462450	1.6015540	8	2 	f	2019-12-08 14:06:40	2019-12-08 14:48:33
8958aa3a-f971-4958-b480-1c03c68eb645	Zambia	ZM	-13.1338970	27.8493320	8	1 	t	2019-12-08 14:06:41	2020-02-09 13:43:32
d3624fdc-2e6d-418c-8c86-a05eca204f6a	Peru	PE	-9.1899670	-75.0151520	7	3 	t	2019-12-08 14:06:41	2020-02-09 13:43:43
\.


--
-- Data for Name: countries_assets; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY public.countries_assets (country_id, asset_id, created_at, updated_at) FROM stdin;
b7315aaa-ceb0-4b00-861c-3eaaa20d9ef7	b7315aaa-ceb0-4b00-861c-3eaaa20d9ef7	2019-12-08 14:06:41	2019-12-08 14:06:41
54c86c3a-fa3d-4fe0-a3c2-51eae9a86bf8	54c86c3a-fa3d-4fe0-a3c2-51eae9a86bf8	2019-12-08 14:06:41	2019-12-08 14:06:41
2048c2eb-d919-45d7-8de1-3e392824c1a4	2048c2eb-d919-45d7-8de1-3e392824c1a4	2019-12-08 14:06:41	2019-12-08 14:06:41
56a3f14b-4803-4577-a592-be0057208a16	56a3f14b-4803-4577-a592-be0057208a16	2019-12-08 14:06:41	2019-12-08 14:06:41
d33f9401-3c3b-4aa2-82a1-3904bbea8019	d33f9401-3c3b-4aa2-82a1-3904bbea8019	2019-12-08 14:06:41	2019-12-08 14:06:41
8893b610-7c7b-470f-9f2b-78e52395d3bb	8893b610-7c7b-470f-9f2b-78e52395d3bb	2019-12-08 14:06:41	2019-12-08 14:06:41
1454daad-ffeb-4aa9-b18d-b6eef1daa3cf	1454daad-ffeb-4aa9-b18d-b6eef1daa3cf	2019-12-08 14:06:41	2019-12-08 14:06:41
b9ead3ac-00b1-4fa6-871f-f3120f7fdfae	b9ead3ac-00b1-4fa6-871f-f3120f7fdfae	2019-12-08 14:06:41	2019-12-08 14:06:41
8be64e69-0b05-413e-bb27-93977c922351	8be64e69-0b05-413e-bb27-93977c922351	2019-12-08 14:06:41	2019-12-08 14:06:41
3bd32798-7f57-4dd5-b61a-9569339721d8	3bd32798-7f57-4dd5-b61a-9569339721d8	2019-12-08 14:06:41	2019-12-08 14:06:41
332aa8ef-cf0a-48d4-bca5-66d80da673a9	332aa8ef-cf0a-48d4-bca5-66d80da673a9	2019-12-08 14:06:41	2019-12-08 14:06:41
e1531e43-859f-4d89-8a5f-97766400087e	e1531e43-859f-4d89-8a5f-97766400087e	2019-12-08 14:06:41	2019-12-08 14:06:41
96eb6e6f-3720-4a40-91b5-aaa751ed0956	96eb6e6f-3720-4a40-91b5-aaa751ed0956	2019-12-08 14:06:41	2019-12-08 14:06:41
0bbfd324-f693-475c-af77-ddec6a40b748	0bbfd324-f693-475c-af77-ddec6a40b748	2019-12-08 14:06:41	2019-12-08 14:06:41
1c170d17-501e-453e-99f7-aa4463c43b24	1c170d17-501e-453e-99f7-aa4463c43b24	2019-12-08 14:06:41	2019-12-08 14:06:41
e81b830f-d896-4ca8-9003-a039eb12957f	e81b830f-d896-4ca8-9003-a039eb12957f	2019-12-08 14:06:41	2019-12-08 14:06:41
c12350e6-beaf-4e38-94d4-48b93533faa4	c12350e6-beaf-4e38-94d4-48b93533faa4	2019-12-08 14:06:41	2019-12-08 14:06:41
98a672f1-7328-45dc-9781-7c0929d68bd6	98a672f1-7328-45dc-9781-7c0929d68bd6	2019-12-08 14:06:41	2019-12-08 14:06:41
d8b2f27e-a584-497c-907d-4fb28570bfff	d8b2f27e-a584-497c-907d-4fb28570bfff	2019-12-08 14:06:41	2019-12-08 14:06:41
3624d83b-4d7a-43a9-b051-15318e91292b	3624d83b-4d7a-43a9-b051-15318e91292b	2019-12-08 14:06:41	2019-12-08 14:06:41
a28609ae-8bad-4f06-8364-ddfb19cb91dc	a28609ae-8bad-4f06-8364-ddfb19cb91dc	2019-12-08 14:06:41	2019-12-08 14:06:41
974ae650-98f3-4c60-9d66-60e886d24a88	974ae650-98f3-4c60-9d66-60e886d24a88	2019-12-08 14:06:41	2019-12-08 14:06:41
b52a772d-39ac-4519-93e0-e137b8f3c4f2	b52a772d-39ac-4519-93e0-e137b8f3c4f2	2019-12-08 14:06:41	2019-12-08 14:06:41
6be218ee-bb5e-46e9-9109-16af17310a60	6be218ee-bb5e-46e9-9109-16af17310a60	2019-12-08 14:06:41	2019-12-08 14:06:41
1d0caed7-c3bf-4d21-914c-a5f238fe19f8	1d0caed7-c3bf-4d21-914c-a5f238fe19f8	2019-12-08 14:06:41	2019-12-08 14:06:41
b5a8688c-0cbb-45d9-91e9-0b9f381887d9	b5a8688c-0cbb-45d9-91e9-0b9f381887d9	2019-12-08 14:06:41	2019-12-08 14:06:41
52f46838-2fd7-40c1-8d17-6f9406c79364	52f46838-2fd7-40c1-8d17-6f9406c79364	2019-12-08 14:06:41	2019-12-08 14:06:41
47690688-db38-46e0-b8e7-05a086357c47	47690688-db38-46e0-b8e7-05a086357c47	2019-12-08 14:06:41	2019-12-08 14:06:41
891ad960-a870-43bc-b6b6-29d8d96486de	891ad960-a870-43bc-b6b6-29d8d96486de	2019-12-08 14:06:41	2019-12-08 14:06:41
a4e9271e-c26b-46d6-a956-86a4b6d42072	a4e9271e-c26b-46d6-a956-86a4b6d42072	2019-12-08 14:06:41	2019-12-08 14:06:41
3ca9f257-c3c3-435d-9082-76ee6bf0b468	3ca9f257-c3c3-435d-9082-76ee6bf0b468	2019-12-08 14:06:41	2019-12-08 14:06:41
a03673ab-f410-4f87-81e6-f7b08256d0a2	a03673ab-f410-4f87-81e6-f7b08256d0a2	2019-12-08 14:06:41	2019-12-08 14:06:41
5f3ed07c-6f43-476d-9a92-420c5d4d73f9	5f3ed07c-6f43-476d-9a92-420c5d4d73f9	2019-12-08 14:06:41	2019-12-08 14:06:41
54a4ee0f-5f96-49e8-a8f8-a33d1c354b44	54a4ee0f-5f96-49e8-a8f8-a33d1c354b44	2019-12-08 14:06:41	2019-12-08 14:06:41
538d36f5-50f9-43c8-a4c5-00230681d08d	538d36f5-50f9-43c8-a4c5-00230681d08d	2019-12-08 14:06:41	2019-12-08 14:06:41
f63185a2-dc4f-4462-9964-516c62bd04d4	f63185a2-dc4f-4462-9964-516c62bd04d4	2019-12-08 14:06:41	2019-12-08 14:06:41
39b222f3-27a3-4805-8ce6-85bd7835d2f1	39b222f3-27a3-4805-8ce6-85bd7835d2f1	2019-12-08 14:06:41	2019-12-08 14:06:41
f21138ed-2a1a-40e5-9c3c-0c9f66490f40	f21138ed-2a1a-40e5-9c3c-0c9f66490f40	2019-12-08 14:06:41	2019-12-08 14:06:41
c1f1eb74-8003-4a12-8c14-462ea9ccecfe	c1f1eb74-8003-4a12-8c14-462ea9ccecfe	2019-12-08 14:06:41	2019-12-08 14:06:41
3b4af40d-de54-4de3-a89a-ad8cf1c894fc	3b4af40d-de54-4de3-a89a-ad8cf1c894fc	2019-12-08 14:06:41	2019-12-08 14:06:41
3d83c55c-49f3-4a56-9029-0c6461d348f8	3d83c55c-49f3-4a56-9029-0c6461d348f8	2019-12-08 14:06:41	2019-12-08 14:06:41
75b8b3f3-c901-40df-92a5-0538db5f4c86	75b8b3f3-c901-40df-92a5-0538db5f4c86	2019-12-08 14:06:41	2019-12-08 14:06:41
a10f7e47-2c5c-42c6-a9b4-5a5b04db333e	a10f7e47-2c5c-42c6-a9b4-5a5b04db333e	2019-12-08 14:06:41	2019-12-08 14:06:41
00666630-f4a7-4dac-aaf9-787829f2c28c	00666630-f4a7-4dac-aaf9-787829f2c28c	2019-12-08 14:06:41	2019-12-08 14:06:41
92f46acd-9b41-45d1-a443-7b38a2c0c0cf	92f46acd-9b41-45d1-a443-7b38a2c0c0cf	2019-12-08 14:06:41	2019-12-08 14:06:41
2a5894df-9ef5-4928-b7d4-4c957cab2ae2	2a5894df-9ef5-4928-b7d4-4c957cab2ae2	2019-12-08 14:06:41	2019-12-08 14:06:41
7422188e-62aa-4440-9fae-f8edc08cb00f	7422188e-62aa-4440-9fae-f8edc08cb00f	2019-12-08 14:06:41	2019-12-08 14:06:41
7882afaa-b54d-43b6-bacc-738c971b280f	7882afaa-b54d-43b6-bacc-738c971b280f	2019-12-08 14:06:41	2019-12-08 14:06:41
3d738dca-cb18-4c74-ac88-cd98c61ea127	3d738dca-cb18-4c74-ac88-cd98c61ea127	2019-12-08 14:06:41	2019-12-08 14:06:41
69a05fa8-7918-4614-97e3-943e410c34d3	69a05fa8-7918-4614-97e3-943e410c34d3	2019-12-08 14:06:41	2019-12-08 14:06:41
868219b5-08e5-4512-90d1-0a8ffa2c593a	868219b5-08e5-4512-90d1-0a8ffa2c593a	2019-12-08 14:06:41	2019-12-08 14:06:41
0446eaf2-6e02-48bd-aa69-86e643d71c09	0446eaf2-6e02-48bd-aa69-86e643d71c09	2019-12-08 14:06:41	2019-12-08 14:06:41
ee69c535-f970-4fd5-a819-4a3f794b7cd6	ee69c535-f970-4fd5-a819-4a3f794b7cd6	2019-12-08 14:06:41	2019-12-08 14:06:41
5d182b64-8111-468e-b01a-8ecde9b66729	5d182b64-8111-468e-b01a-8ecde9b66729	2019-12-08 14:06:41	2019-12-08 14:06:41
9a21889a-a805-4934-a120-b5a137ab99dc	9a21889a-a805-4934-a120-b5a137ab99dc	2019-12-08 14:06:41	2019-12-08 14:06:41
59f5290a-f3d9-4427-892a-db6f96d14408	59f5290a-f3d9-4427-892a-db6f96d14408	2019-12-08 14:06:41	2019-12-08 14:06:41
a2a96974-0500-4013-9769-69dfb647d2f1	a2a96974-0500-4013-9769-69dfb647d2f1	2019-12-08 14:06:41	2019-12-08 14:06:41
2d46c6eb-d82c-4fc2-b8f9-75d535741ef3	2d46c6eb-d82c-4fc2-b8f9-75d535741ef3	2019-12-08 14:06:41	2019-12-08 14:06:41
db23e2cb-3131-4b57-9684-3ff8fb8f5c95	db23e2cb-3131-4b57-9684-3ff8fb8f5c95	2019-12-08 14:06:41	2019-12-08 14:06:41
30431ccf-749c-44ad-9cb5-26e7274f3c6a	30431ccf-749c-44ad-9cb5-26e7274f3c6a	2019-12-08 14:06:41	2019-12-08 14:06:41
d5b57a73-7b3f-4a36-9e71-6e7e83ec668f	d5b57a73-7b3f-4a36-9e71-6e7e83ec668f	2019-12-08 14:06:41	2019-12-08 14:06:41
9d6e2359-4d5a-413d-865c-d8774805b5b1	9d6e2359-4d5a-413d-865c-d8774805b5b1	2019-12-08 14:06:41	2019-12-08 14:06:41
cdbd9bd7-ff12-4ef0-b51a-335eb2317708	cdbd9bd7-ff12-4ef0-b51a-335eb2317708	2019-12-08 14:06:41	2019-12-08 14:06:41
47090e4d-4002-4b7e-9e85-e9d00e6d0691	47090e4d-4002-4b7e-9e85-e9d00e6d0691	2019-12-08 14:06:41	2019-12-08 14:06:41
ce60f115-73ea-4672-847c-69c335d2144c	ce60f115-73ea-4672-847c-69c335d2144c	2019-12-08 14:06:41	2019-12-08 14:06:41
8ed4f652-f070-4204-bb1f-76252e522921	8ed4f652-f070-4204-bb1f-76252e522921	2019-12-08 14:06:41	2019-12-08 14:06:41
28b20f50-caf1-40be-b72a-6150ec8863c3	28b20f50-caf1-40be-b72a-6150ec8863c3	2019-12-08 14:06:41	2019-12-08 14:06:41
61cb2b24-b793-43e8-bfc7-f498e6d3c95b	61cb2b24-b793-43e8-bfc7-f498e6d3c95b	2019-12-08 14:06:41	2019-12-08 14:06:41
0f0d22ff-f198-4b1c-838b-24bcdabbcb0f	0f0d22ff-f198-4b1c-838b-24bcdabbcb0f	2019-12-08 14:06:41	2019-12-08 14:06:41
f7da3915-684e-44b1-ab30-c832b6f46edf	f7da3915-684e-44b1-ab30-c832b6f46edf	2019-12-08 14:06:41	2019-12-08 14:06:41
bd43c66f-1dca-47d5-95a8-63c3cb05c3f9	bd43c66f-1dca-47d5-95a8-63c3cb05c3f9	2019-12-08 14:06:41	2019-12-08 14:06:41
b924069c-fe33-4ad2-905f-e503d84cdea5	b924069c-fe33-4ad2-905f-e503d84cdea5	2019-12-08 14:06:41	2019-12-08 14:06:41
6ce38837-e69f-4737-bea4-5e5c30dbb676	6ce38837-e69f-4737-bea4-5e5c30dbb676	2019-12-08 14:06:41	2019-12-08 14:06:41
33a4c438-4752-40ef-9408-871e24a2b964	33a4c438-4752-40ef-9408-871e24a2b964	2019-12-08 14:06:41	2019-12-08 14:06:41
aaf84def-011a-48d5-b9b9-8e49f379c55b	aaf84def-011a-48d5-b9b9-8e49f379c55b	2019-12-08 14:06:41	2019-12-08 14:06:41
0d8219f0-c15f-48bf-b537-5a0fdd88a24c	0d8219f0-c15f-48bf-b537-5a0fdd88a24c	2019-12-08 14:06:41	2019-12-08 14:06:41
f1966f0a-2c2d-4cca-aeb0-69a39dcc4b40	f1966f0a-2c2d-4cca-aeb0-69a39dcc4b40	2019-12-08 14:06:41	2019-12-08 14:06:41
85f8f690-4c6a-4ff2-b453-31f872b063a4	85f8f690-4c6a-4ff2-b453-31f872b063a4	2019-12-08 14:06:41	2019-12-08 14:06:41
705da6bd-a98b-4a00-af4f-62263fea241a	705da6bd-a98b-4a00-af4f-62263fea241a	2019-12-08 14:06:41	2019-12-08 14:06:41
18d335d3-0ad4-4f63-89ce-fab5eaa5ad9f	18d335d3-0ad4-4f63-89ce-fab5eaa5ad9f	2019-12-08 14:06:41	2019-12-08 14:06:41
b5bfc7e4-8c66-4544-88e6-8bac6756b49c	b5bfc7e4-8c66-4544-88e6-8bac6756b49c	2019-12-08 14:06:41	2019-12-08 14:06:41
a0e3f424-b33d-4bb6-b932-aff08f772c6b	a0e3f424-b33d-4bb6-b932-aff08f772c6b	2019-12-08 14:06:41	2019-12-08 14:06:41
3ed9c0ac-9279-46c7-b216-dc4910980570	3ed9c0ac-9279-46c7-b216-dc4910980570	2019-12-08 14:06:41	2019-12-08 14:06:41
69d66bce-5bbf-4ba5-aa4d-e8434dd24a79	69d66bce-5bbf-4ba5-aa4d-e8434dd24a79	2019-12-08 14:06:41	2019-12-08 14:06:41
dc70bb4f-f579-48db-ba2a-4b78f0030b11	dc70bb4f-f579-48db-ba2a-4b78f0030b11	2019-12-08 14:06:41	2019-12-08 14:06:41
46a797f2-3a9c-4a5b-b944-da046289ef1d	46a797f2-3a9c-4a5b-b944-da046289ef1d	2019-12-08 14:06:41	2019-12-08 14:06:41
bba16bce-b3e0-40ca-a1bd-573035114e4a	bba16bce-b3e0-40ca-a1bd-573035114e4a	2019-12-08 14:06:41	2019-12-08 14:06:41
1310ac15-63c7-43bf-a648-ebf8455e6fdb	1310ac15-63c7-43bf-a648-ebf8455e6fdb	2019-12-08 14:06:41	2019-12-08 14:06:41
31046477-713b-486e-9b6f-91cacbec0557	31046477-713b-486e-9b6f-91cacbec0557	2019-12-08 14:06:41	2019-12-08 14:06:41
63b84988-967d-499c-8e62-d53dfd306cca	63b84988-967d-499c-8e62-d53dfd306cca	2019-12-08 14:06:41	2019-12-08 14:06:41
5fe5cc46-6fbf-41d5-aada-9299c3dd672f	5fe5cc46-6fbf-41d5-aada-9299c3dd672f	2019-12-08 14:06:41	2019-12-08 14:06:41
f741850f-8e3d-49fe-92c3-c2dfb6ee7709	f741850f-8e3d-49fe-92c3-c2dfb6ee7709	2019-12-08 14:06:41	2019-12-08 14:06:41
852a5a7f-777f-49ff-bb86-3f2377ec7667	852a5a7f-777f-49ff-bb86-3f2377ec7667	2019-12-08 14:06:41	2019-12-08 14:06:41
1467b6a4-05b0-47dc-b63d-eddbff9b80b5	1467b6a4-05b0-47dc-b63d-eddbff9b80b5	2019-12-08 14:06:41	2019-12-08 14:06:41
ae67a76e-4ff7-4538-80e6-54cf6eb9b139	ae67a76e-4ff7-4538-80e6-54cf6eb9b139	2019-12-08 14:06:41	2019-12-08 14:06:41
9bcf03e7-542e-4ce0-95b0-f10326707835	9bcf03e7-542e-4ce0-95b0-f10326707835	2019-12-08 14:06:41	2019-12-08 14:06:41
a3ecefb4-f071-4d82-a406-8eb1fe8d2da4	a3ecefb4-f071-4d82-a406-8eb1fe8d2da4	2019-12-08 14:06:41	2019-12-08 14:06:41
6e7dec70-3e7a-4e9c-9bdb-155b84e40df7	6e7dec70-3e7a-4e9c-9bdb-155b84e40df7	2019-12-08 14:06:41	2019-12-08 14:06:41
dac12cba-a409-4d7f-9e0e-b3a637b6b9bf	dac12cba-a409-4d7f-9e0e-b3a637b6b9bf	2019-12-08 14:06:41	2019-12-08 14:06:41
5fbe9971-2b2c-4022-a6cf-0a28fb2a3be7	5fbe9971-2b2c-4022-a6cf-0a28fb2a3be7	2019-12-08 14:06:41	2019-12-08 14:06:41
cd20cba1-3bde-4eeb-a215-9b76b71bba6c	cd20cba1-3bde-4eeb-a215-9b76b71bba6c	2019-12-08 14:06:41	2019-12-08 14:06:41
a3640d4b-f0a4-454a-a53b-23e495acacb3	a3640d4b-f0a4-454a-a53b-23e495acacb3	2019-12-08 14:06:41	2019-12-08 14:06:41
0298eb8c-5299-4e92-86ac-ccab3cc552c0	0298eb8c-5299-4e92-86ac-ccab3cc552c0	2019-12-08 14:06:41	2019-12-08 14:06:41
c75093a0-5014-4ff5-9de5-72972450d3a0	c75093a0-5014-4ff5-9de5-72972450d3a0	2019-12-08 14:06:41	2019-12-08 14:06:41
4cfdf3bf-e2b4-4a9c-b467-6ec1406398aa	4cfdf3bf-e2b4-4a9c-b467-6ec1406398aa	2019-12-08 14:06:41	2019-12-08 14:06:41
3c03505c-f6b4-428f-b18e-6d14513bfcdd	3c03505c-f6b4-428f-b18e-6d14513bfcdd	2019-12-08 14:06:41	2019-12-08 14:06:41
69d221fa-58c4-4b04-a64d-10208e35c8f2	69d221fa-58c4-4b04-a64d-10208e35c8f2	2019-12-08 14:06:41	2019-12-08 14:06:41
4bfaada9-0015-48c2-aed4-9eb33755ecdf	4bfaada9-0015-48c2-aed4-9eb33755ecdf	2019-12-08 14:06:41	2019-12-08 14:06:41
7f9e53ed-dcf6-41ea-8675-8cd69b0abb6c	7f9e53ed-dcf6-41ea-8675-8cd69b0abb6c	2019-12-08 14:06:41	2019-12-08 14:06:41
fbd5ff81-24ae-4ee4-a09d-9275bd202ca6	fbd5ff81-24ae-4ee4-a09d-9275bd202ca6	2019-12-08 14:06:41	2019-12-08 14:06:41
f505239f-1d26-4123-939c-6588d5285c69	f505239f-1d26-4123-939c-6588d5285c69	2019-12-08 14:06:41	2019-12-08 14:06:41
b3644b91-13ba-4f69-ba4f-c999db2d5b52	b3644b91-13ba-4f69-ba4f-c999db2d5b52	2019-12-08 14:06:41	2019-12-08 14:06:41
c6e06c87-15af-47d3-9904-291f51668a80	c6e06c87-15af-47d3-9904-291f51668a80	2019-12-08 14:06:41	2019-12-08 14:06:41
8701cbd4-cb8f-4911-9cef-b57b237380dd	8701cbd4-cb8f-4911-9cef-b57b237380dd	2019-12-08 14:06:41	2019-12-08 14:06:41
3af259bd-8c31-48aa-8838-1f0433cc67ef	3af259bd-8c31-48aa-8838-1f0433cc67ef	2019-12-08 14:06:41	2019-12-08 14:06:41
4b17d29b-1ab4-4b4d-96e9-5c9d2e63420d	4b17d29b-1ab4-4b4d-96e9-5c9d2e63420d	2019-12-08 14:06:41	2019-12-08 14:06:41
7b1fd9a0-e895-43c3-9bef-516be5eabb0c	7b1fd9a0-e895-43c3-9bef-516be5eabb0c	2019-12-08 14:06:41	2019-12-08 14:06:41
c5066cff-7bad-4d29-a233-7836f2d5a9dd	c5066cff-7bad-4d29-a233-7836f2d5a9dd	2019-12-08 14:06:41	2019-12-08 14:06:41
dab4f0ba-8a02-4f21-b029-68411e05ac8c	dab4f0ba-8a02-4f21-b029-68411e05ac8c	2019-12-08 14:06:41	2019-12-08 14:06:41
87a9ce4a-a0b7-4a07-9a14-53b3d009f2e3	87a9ce4a-a0b7-4a07-9a14-53b3d009f2e3	2019-12-08 14:06:41	2019-12-08 14:06:41
7ca772be-efa8-45e7-9a5e-972d5c8fe0f0	7ca772be-efa8-45e7-9a5e-972d5c8fe0f0	2019-12-08 14:06:41	2019-12-08 14:06:41
c3231105-d139-4ed1-82fe-da0247e332f3	c3231105-d139-4ed1-82fe-da0247e332f3	2019-12-08 14:06:41	2019-12-08 14:06:41
33f7ec28-cab6-4ad5-b2c5-3f91074df931	33f7ec28-cab6-4ad5-b2c5-3f91074df931	2019-12-08 14:06:41	2019-12-08 14:06:41
c3cd8077-4b9e-47bb-b209-245efa0b967a	c3cd8077-4b9e-47bb-b209-245efa0b967a	2019-12-08 14:06:41	2019-12-08 14:06:41
af0796db-27a6-4ed0-b865-ec87a2597f38	af0796db-27a6-4ed0-b865-ec87a2597f38	2019-12-08 14:06:41	2019-12-08 14:06:41
cacaacdb-7bf5-4d1d-928a-e853efd32554	cacaacdb-7bf5-4d1d-928a-e853efd32554	2019-12-08 14:06:41	2019-12-08 14:06:41
ad70fa60-650d-471c-9dce-05c0134fe56a	ad70fa60-650d-471c-9dce-05c0134fe56a	2019-12-08 14:06:41	2019-12-08 14:06:41
c6a69446-5104-435f-9727-7d534d731dee	c6a69446-5104-435f-9727-7d534d731dee	2019-12-08 14:06:41	2019-12-08 14:06:41
312f95e5-08d2-47a3-a7c5-c6ae6979acce	312f95e5-08d2-47a3-a7c5-c6ae6979acce	2019-12-08 14:06:41	2019-12-08 14:06:41
bfd18859-c050-4c8e-a283-0f5226537210	bfd18859-c050-4c8e-a283-0f5226537210	2019-12-08 14:06:41	2019-12-08 14:06:41
96c70f34-6b7c-4fbb-9918-eb560203771d	96c70f34-6b7c-4fbb-9918-eb560203771d	2019-12-08 14:06:41	2019-12-08 14:06:41
24736943-dfa7-482c-add7-981d2bbda2ce	24736943-dfa7-482c-add7-981d2bbda2ce	2019-12-08 14:06:41	2019-12-08 14:06:41
2598ca64-521a-48c7-a3e3-4c56ed6b586f	2598ca64-521a-48c7-a3e3-4c56ed6b586f	2019-12-08 14:06:41	2019-12-08 14:06:41
0d5ea66d-0af6-4c14-b2ed-8a667ffa7713	0d5ea66d-0af6-4c14-b2ed-8a667ffa7713	2019-12-08 14:06:41	2019-12-08 14:06:41
fae46fec-7029-4556-9d3d-26c7839ce532	fae46fec-7029-4556-9d3d-26c7839ce532	2019-12-08 14:06:41	2019-12-08 14:06:41
7e159132-d470-41aa-a0a2-723c8cd4262a	7e159132-d470-41aa-a0a2-723c8cd4262a	2019-12-08 14:06:41	2019-12-08 14:06:41
8abfe1c9-5f2b-463c-bac9-9e298981a43e	8abfe1c9-5f2b-463c-bac9-9e298981a43e	2019-12-08 14:06:41	2019-12-08 14:06:41
3b9e3ce3-39a4-4c52-8f52-3799470a7d75	3b9e3ce3-39a4-4c52-8f52-3799470a7d75	2019-12-08 14:06:41	2019-12-08 14:06:41
bcb6a6a7-40bb-4651-a9b4-a8d895cdeb57	bcb6a6a7-40bb-4651-a9b4-a8d895cdeb57	2019-12-08 14:06:41	2019-12-08 14:06:41
739a8018-bd98-4cd9-946e-5a6bcffac988	739a8018-bd98-4cd9-946e-5a6bcffac988	2019-12-08 14:06:41	2019-12-08 14:06:41
112e6ee1-bf5c-403a-97a2-f878ad39f5a7	112e6ee1-bf5c-403a-97a2-f878ad39f5a7	2019-12-08 14:06:41	2019-12-08 14:06:41
fa7fb147-3513-401a-aabf-d7b4b1f21933	fa7fb147-3513-401a-aabf-d7b4b1f21933	2019-12-08 14:06:41	2019-12-08 14:06:41
900e98bf-332f-487b-b62e-4b3db157efa9	900e98bf-332f-487b-b62e-4b3db157efa9	2019-12-08 14:06:41	2019-12-08 14:06:41
98f09e29-9468-4f34-ac92-7d5e098fa010	98f09e29-9468-4f34-ac92-7d5e098fa010	2019-12-08 14:06:41	2019-12-08 14:06:41
7c5628cd-c891-43f8-b1de-80e7fbab0099	7c5628cd-c891-43f8-b1de-80e7fbab0099	2019-12-08 14:06:41	2019-12-08 14:06:41
28742833-e107-475a-91e6-9bb3071060ea	28742833-e107-475a-91e6-9bb3071060ea	2019-12-08 14:06:41	2019-12-08 14:06:41
6af68a35-9898-417e-913b-2373c123c8e2	6af68a35-9898-417e-913b-2373c123c8e2	2019-12-08 14:06:41	2019-12-08 14:06:41
c8eda42f-f213-4b29-9364-1e1fa9fbef17	c8eda42f-f213-4b29-9364-1e1fa9fbef17	2019-12-08 14:06:41	2019-12-08 14:06:41
b050c649-9fc6-411e-9c55-dc626792cbb5	b050c649-9fc6-411e-9c55-dc626792cbb5	2019-12-08 14:06:41	2019-12-08 14:06:41
26e2969e-89dc-4852-a0b7-3fe3e0c95774	26e2969e-89dc-4852-a0b7-3fe3e0c95774	2019-12-08 14:06:41	2019-12-08 14:06:41
12504b94-96f7-4874-a629-245e3e46ca98	12504b94-96f7-4874-a629-245e3e46ca98	2019-12-08 14:06:41	2019-12-08 14:06:41
99715863-b908-4e5a-8cd8-e6f1da3af703	99715863-b908-4e5a-8cd8-e6f1da3af703	2019-12-08 14:06:41	2019-12-08 14:06:41
ed435283-391f-456d-8bdb-3447fc15831a	ed435283-391f-456d-8bdb-3447fc15831a	2019-12-08 14:06:41	2019-12-08 14:06:41
b50ac85a-f47a-4c98-8b59-3ea56a898d69	b50ac85a-f47a-4c98-8b59-3ea56a898d69	2019-12-08 14:06:41	2019-12-08 14:06:41
8ff12178-b2ea-4df7-81cf-290962cfe03d	8ff12178-b2ea-4df7-81cf-290962cfe03d	2019-12-08 14:06:41	2019-12-08 14:06:41
b85d1a0a-540f-4921-8cd1-d2706ee24e19	b85d1a0a-540f-4921-8cd1-d2706ee24e19	2019-12-08 14:06:41	2019-12-08 14:06:41
437cbfef-4a89-4a80-b2ce-9027917edb26	437cbfef-4a89-4a80-b2ce-9027917edb26	2019-12-08 14:06:41	2019-12-08 14:06:41
4d4b4e13-4e04-4857-b4bd-c9d788ef7282	4d4b4e13-4e04-4857-b4bd-c9d788ef7282	2019-12-08 14:06:41	2019-12-08 14:06:41
780df8d7-f931-44c2-b297-54ccb384362b	780df8d7-f931-44c2-b297-54ccb384362b	2019-12-08 14:06:41	2019-12-08 14:06:41
977d2b0a-6e28-4dbe-a502-b313c3c8577a	977d2b0a-6e28-4dbe-a502-b313c3c8577a	2019-12-08 14:06:41	2019-12-08 14:06:41
af9e9798-8b33-4e30-9f6e-102ae2e6d407	af9e9798-8b33-4e30-9f6e-102ae2e6d407	2019-12-08 14:06:41	2019-12-08 14:06:41
472e06f1-aa32-4ea9-b0e0-a420ba55ddcf	472e06f1-aa32-4ea9-b0e0-a420ba55ddcf	2019-12-08 14:06:41	2019-12-08 14:06:41
ae2ea402-447d-4ba4-be33-dec6ea707531	ae2ea402-447d-4ba4-be33-dec6ea707531	2019-12-08 14:06:41	2019-12-08 14:06:41
ae6ef9d5-7bc1-482e-88d0-8bd948f83112	ae6ef9d5-7bc1-482e-88d0-8bd948f83112	2019-12-08 14:06:41	2019-12-08 14:06:41
3810074d-53f6-4fa8-a0d7-94cb0ea058d6	3810074d-53f6-4fa8-a0d7-94cb0ea058d6	2019-12-08 14:06:41	2019-12-08 14:06:41
d9a69ca4-1e67-4116-8f00-0f16f9cc32a4	d9a69ca4-1e67-4116-8f00-0f16f9cc32a4	2019-12-08 14:06:41	2019-12-08 14:06:41
e3200091-2f22-48d5-be16-2552b859b219	e3200091-2f22-48d5-be16-2552b859b219	2019-12-08 14:06:41	2019-12-08 14:06:41
8c79fca0-8815-4bfc-8ed1-176f8d080fee	8c79fca0-8815-4bfc-8ed1-176f8d080fee	2019-12-08 14:06:41	2019-12-08 14:06:41
0a06abd8-64cd-46be-9376-b48b5cc45154	0a06abd8-64cd-46be-9376-b48b5cc45154	2019-12-08 14:06:41	2019-12-08 14:06:41
6606696c-7f1d-400f-addb-643e92535259	6606696c-7f1d-400f-addb-643e92535259	2019-12-08 14:06:41	2019-12-08 14:06:41
ada1fc45-cddd-4570-b8e3-28fdea970647	ada1fc45-cddd-4570-b8e3-28fdea970647	2019-12-08 14:06:41	2019-12-08 14:06:41
431a8018-3e34-47ea-8550-3692d0c4d231	431a8018-3e34-47ea-8550-3692d0c4d231	2019-12-08 14:06:41	2019-12-08 14:06:41
763fd192-1e06-4b96-b144-32c78c3adc06	763fd192-1e06-4b96-b144-32c78c3adc06	2019-12-08 14:06:41	2019-12-08 14:06:41
d3624fdc-2e6d-418c-8c86-a05eca204f6a	d3624fdc-2e6d-418c-8c86-a05eca204f6a	2019-12-08 14:06:41	2019-12-08 14:06:41
53e4cbd1-e642-45fd-a6ee-3d82c70b96da	53e4cbd1-e642-45fd-a6ee-3d82c70b96da	2019-12-08 14:06:41	2019-12-08 14:06:41
abdc4e5e-d322-46a1-aa39-3c7c45737031	abdc4e5e-d322-46a1-aa39-3c7c45737031	2019-12-08 14:06:41	2019-12-08 14:06:41
5ea0d6ec-6b99-4124-b358-be1363480bc0	5ea0d6ec-6b99-4124-b358-be1363480bc0	2019-12-08 14:06:41	2019-12-08 14:06:41
dfc3dc50-8838-48d1-81d2-e15ca56b99a6	dfc3dc50-8838-48d1-81d2-e15ca56b99a6	2019-12-08 14:06:41	2019-12-08 14:06:41
a3766405-883c-4cff-8167-b43e65d41378	a3766405-883c-4cff-8167-b43e65d41378	2019-12-08 14:06:41	2019-12-08 14:06:41
3e3cb4e7-b763-4502-82a6-2ca2c7483b34	3e3cb4e7-b763-4502-82a6-2ca2c7483b34	2019-12-08 14:06:41	2019-12-08 14:06:41
416444c2-a5a3-4fbe-985b-2bbd6bb8aedc	416444c2-a5a3-4fbe-985b-2bbd6bb8aedc	2019-12-08 14:06:41	2019-12-08 14:06:41
fa8655c9-e8c5-4af4-90eb-0da1ab15b623	fa8655c9-e8c5-4af4-90eb-0da1ab15b623	2019-12-08 14:06:41	2019-12-08 14:06:41
53657097-5427-4de5-99ba-2ff0c76957e3	53657097-5427-4de5-99ba-2ff0c76957e3	2019-12-08 14:06:41	2019-12-08 14:06:41
129aeb61-f332-440a-8bc4-c36f65f2ebb6	129aeb61-f332-440a-8bc4-c36f65f2ebb6	2019-12-08 14:06:41	2019-12-08 14:06:41
54e167db-c584-42c5-909d-bb85b007e85a	54e167db-c584-42c5-909d-bb85b007e85a	2019-12-08 14:06:41	2019-12-08 14:06:41
d6385ef3-148d-4236-bb2b-d791785a75af	d6385ef3-148d-4236-bb2b-d791785a75af	2019-12-08 14:06:41	2019-12-08 14:06:41
71f4a3d4-4b3c-4890-a774-ee934499b160	71f4a3d4-4b3c-4890-a774-ee934499b160	2019-12-08 14:06:41	2019-12-08 14:06:41
5f02bc94-4b2a-4a7f-9f02-0f6086108297	5f02bc94-4b2a-4a7f-9f02-0f6086108297	2019-12-08 14:06:41	2019-12-08 14:06:41
b300c879-efd6-4b91-a9fa-f0993c7c32fe	b300c879-efd6-4b91-a9fa-f0993c7c32fe	2019-12-08 14:06:41	2019-12-08 14:06:41
596822dc-1de5-4b55-9d60-065201bf8820	596822dc-1de5-4b55-9d60-065201bf8820	2019-12-08 14:06:41	2019-12-08 14:06:41
a7969b22-5803-4fd6-987a-0255c139fdad	a7969b22-5803-4fd6-987a-0255c139fdad	2019-12-08 14:06:41	2019-12-08 14:06:41
5b6c2b95-acee-49bb-8484-89147cf8d259	5b6c2b95-acee-49bb-8484-89147cf8d259	2019-12-08 14:06:41	2019-12-08 14:06:41
83c514bc-7b9a-4eda-889c-86d0ea7fdb67	83c514bc-7b9a-4eda-889c-86d0ea7fdb67	2019-12-08 14:06:41	2019-12-08 14:06:41
48075570-149c-487b-8dd0-d1e2f0665311	48075570-149c-487b-8dd0-d1e2f0665311	2019-12-08 14:06:41	2019-12-08 14:06:41
2cbd44df-667f-4d69-b4e8-488f4ac70864	2cbd44df-667f-4d69-b4e8-488f4ac70864	2019-12-08 14:06:41	2019-12-08 14:06:41
bcfeed5b-4ea4-4851-90cd-7e8073d71887	bcfeed5b-4ea4-4851-90cd-7e8073d71887	2019-12-08 14:06:41	2019-12-08 14:06:41
8b5cd769-d77a-4b62-a9b7-fc444e2d1527	8b5cd769-d77a-4b62-a9b7-fc444e2d1527	2019-12-08 14:06:41	2019-12-08 14:06:41
26f9f54a-72a3-486d-8051-036bf00c1a12	26f9f54a-72a3-486d-8051-036bf00c1a12	2019-12-08 14:06:41	2019-12-08 14:06:41
ea50abba-b2dd-4402-a950-89e80236f7eb	ea50abba-b2dd-4402-a950-89e80236f7eb	2019-12-08 14:06:41	2019-12-08 14:06:41
5fc509e0-1c7b-4906-9425-d409a88be73e	5fc509e0-1c7b-4906-9425-d409a88be73e	2019-12-08 14:06:41	2019-12-08 14:06:41
2d137ee8-5085-48e6-a601-a57c12fedf97	2d137ee8-5085-48e6-a601-a57c12fedf97	2019-12-08 14:06:41	2019-12-08 14:06:41
a7c57404-9d37-4e96-8fe6-545efc6ec781	a7c57404-9d37-4e96-8fe6-545efc6ec781	2019-12-08 14:06:41	2019-12-08 14:06:41
cd7fe46b-3708-41ff-80c3-259c7bcb55b2	cd7fe46b-3708-41ff-80c3-259c7bcb55b2	2019-12-08 14:06:41	2019-12-08 14:06:41
946d1910-62b6-4013-a274-a8988883938e	946d1910-62b6-4013-a274-a8988883938e	2019-12-08 14:06:41	2019-12-08 14:06:41
4ff60c7c-d2e9-4de1-90c4-6f2154798cf9	4ff60c7c-d2e9-4de1-90c4-6f2154798cf9	2019-12-08 14:06:41	2019-12-08 14:06:41
1203db35-e612-4eb2-ae5a-10db0b9a9981	1203db35-e612-4eb2-ae5a-10db0b9a9981	2019-12-08 14:06:41	2019-12-08 14:06:41
4e7577e6-207c-42aa-8b97-aa9e0b407663	4e7577e6-207c-42aa-8b97-aa9e0b407663	2019-12-08 14:06:41	2019-12-08 14:06:41
88371aea-1aa2-47af-aabd-fe1b8a1531a2	88371aea-1aa2-47af-aabd-fe1b8a1531a2	2019-12-08 14:06:41	2019-12-08 14:06:41
ee3a5145-7945-436d-8da2-e91ea386ceff	ee3a5145-7945-436d-8da2-e91ea386ceff	2019-12-08 14:06:41	2019-12-08 14:06:41
23fe60c4-5b0a-40bf-8381-cf73062e5351	23fe60c4-5b0a-40bf-8381-cf73062e5351	2019-12-08 14:06:41	2019-12-08 14:06:41
e504c0f3-2510-43e9-82ab-89624e340f32	e504c0f3-2510-43e9-82ab-89624e340f32	2019-12-08 14:06:41	2019-12-08 14:06:41
0aac3f44-3ec5-4d9f-8b3b-1e45283894f8	0aac3f44-3ec5-4d9f-8b3b-1e45283894f8	2019-12-08 14:06:41	2019-12-08 14:06:41
8fb0ba30-05fd-4626-ba1a-ce078d1b21ab	8fb0ba30-05fd-4626-ba1a-ce078d1b21ab	2019-12-08 14:06:41	2019-12-08 14:06:41
6226c46c-2abe-40db-bd36-6f393fd42944	6226c46c-2abe-40db-bd36-6f393fd42944	2019-12-08 14:06:41	2019-12-08 14:06:41
65a7f1e6-7ec7-42aa-8abf-f7ee82bac73a	65a7f1e6-7ec7-42aa-8abf-f7ee82bac73a	2019-12-08 14:06:41	2019-12-08 14:06:41
7273c9ef-98d6-4dc8-897d-271fa5ea228f	7273c9ef-98d6-4dc8-897d-271fa5ea228f	2019-12-08 14:06:41	2019-12-08 14:06:41
9a6a6d7b-b334-4a83-a2ac-0e732dfb26a0	9a6a6d7b-b334-4a83-a2ac-0e732dfb26a0	2019-12-08 14:06:41	2019-12-08 14:06:41
aa388a07-2f3f-4050-aea8-d97b00edde28	aa388a07-2f3f-4050-aea8-d97b00edde28	2019-12-08 14:06:41	2019-12-08 14:06:41
c4f6f344-0d2b-428c-99fa-20c44220fd38	c4f6f344-0d2b-428c-99fa-20c44220fd38	2019-12-08 14:06:41	2019-12-08 14:06:41
7a5dc7cc-b9e7-4d8e-9ff5-a2d863e42464	7a5dc7cc-b9e7-4d8e-9ff5-a2d863e42464	2019-12-08 14:06:41	2019-12-08 14:06:41
b8d2857d-8fea-45cc-9a6a-7c2904db247e	b8d2857d-8fea-45cc-9a6a-7c2904db247e	2019-12-08 14:06:41	2019-12-08 14:06:41
f6fe3312-646d-4812-b9e2-b5e8bed3e41a	f6fe3312-646d-4812-b9e2-b5e8bed3e41a	2019-12-08 14:06:41	2019-12-08 14:06:41
c4a05c90-3c31-4b0b-b187-518fe4716e0f	c4a05c90-3c31-4b0b-b187-518fe4716e0f	2019-12-08 14:06:41	2019-12-08 14:06:41
1bd60382-2d0d-4564-9f7e-0efa18e69890	1bd60382-2d0d-4564-9f7e-0efa18e69890	2019-12-08 14:06:41	2019-12-08 14:06:41
46d072e3-5d35-454a-a4f8-e3466967da4a	46d072e3-5d35-454a-a4f8-e3466967da4a	2019-12-08 14:06:41	2019-12-08 14:06:41
3803f585-cab6-4f7b-8743-e0cff10ab5e1	3803f585-cab6-4f7b-8743-e0cff10ab5e1	2019-12-08 14:06:41	2019-12-08 14:06:41
42709f6a-2e49-437c-a690-7a816ae29b4e	42709f6a-2e49-437c-a690-7a816ae29b4e	2019-12-08 14:06:41	2019-12-08 14:06:41
217c6107-3b05-417c-a8f6-eea08edb42e2	217c6107-3b05-417c-a8f6-eea08edb42e2	2019-12-08 14:06:41	2019-12-08 14:06:41
6d83ff69-3d1d-4dd2-8e94-1cd1e9837287	6d83ff69-3d1d-4dd2-8e94-1cd1e9837287	2019-12-08 14:06:41	2019-12-08 14:06:41
798107d0-ca28-4aea-884c-1b6a58209742	798107d0-ca28-4aea-884c-1b6a58209742	2019-12-08 14:06:41	2019-12-08 14:06:41
7ee0777b-9f5d-4fc7-a05d-367528be53e7	7ee0777b-9f5d-4fc7-a05d-367528be53e7	2019-12-08 14:06:41	2019-12-08 14:06:41
923f7058-0d00-4e32-ae5c-006a0c2b52c2	923f7058-0d00-4e32-ae5c-006a0c2b52c2	2019-12-08 14:06:41	2019-12-08 14:06:41
74b4d92f-4de2-459e-a28a-9c04507ca427	74b4d92f-4de2-459e-a28a-9c04507ca427	2019-12-08 14:06:41	2019-12-08 14:06:41
afc07d6f-a9f4-4ca8-82ca-03affaf1bf4d	afc07d6f-a9f4-4ca8-82ca-03affaf1bf4d	2019-12-08 14:06:41	2019-12-08 14:06:41
b86ae4bb-cab6-42f7-8f9e-4135f203880e	b86ae4bb-cab6-42f7-8f9e-4135f203880e	2019-12-08 14:06:41	2019-12-08 14:06:41
25ffbfb2-379d-45a5-82d7-36baff47a850	25ffbfb2-379d-45a5-82d7-36baff47a850	2019-12-08 14:06:41	2019-12-08 14:06:41
01f859ba-16d3-4829-9478-c5ef07033b41	01f859ba-16d3-4829-9478-c5ef07033b41	2019-12-08 14:06:41	2019-12-08 14:06:41
1549c9b2-0643-4e44-842c-c0652fbc6ac3	1549c9b2-0643-4e44-842c-c0652fbc6ac3	2019-12-08 14:06:41	2019-12-08 14:06:41
92cb717c-74c6-4bc4-92ed-d2d061eb2c20	92cb717c-74c6-4bc4-92ed-d2d061eb2c20	2019-12-08 14:06:41	2019-12-08 14:06:41
bb890818-b144-4806-a6ff-9e52921efbbb	bb890818-b144-4806-a6ff-9e52921efbbb	2019-12-08 14:06:41	2019-12-08 14:06:41
d65bac50-4271-4000-9f03-4ce6a486410a	d65bac50-4271-4000-9f03-4ce6a486410a	2019-12-08 14:06:41	2019-12-08 14:06:41
a4385650-7b93-4f58-b98a-6362c3f96413	a4385650-7b93-4f58-b98a-6362c3f96413	2019-12-08 14:06:41	2019-12-08 14:06:41
f9b0bbf8-b208-4f48-aa96-e9788dfa64df	f9b0bbf8-b208-4f48-aa96-e9788dfa64df	2019-12-08 14:06:41	2019-12-08 14:06:41
3b870512-a2d1-4799-89b2-cd3144a330c8	3b870512-a2d1-4799-89b2-cd3144a330c8	2019-12-08 14:06:41	2019-12-08 14:06:41
4eb07dd8-8252-4874-bb46-b2938076ea38	4eb07dd8-8252-4874-bb46-b2938076ea38	2019-12-08 14:06:41	2019-12-08 14:06:41
f890b587-3908-4db6-8618-b70d7f49e583	f890b587-3908-4db6-8618-b70d7f49e583	2019-12-08 14:06:41	2019-12-08 14:06:41
e2ad87be-4b5a-4b0b-b22f-6c88cf2aff0a	e2ad87be-4b5a-4b0b-b22f-6c88cf2aff0a	2019-12-08 14:06:41	2019-12-08 14:06:41
8958aa3a-f971-4958-b480-1c03c68eb645	8958aa3a-f971-4958-b480-1c03c68eb645	2019-12-08 14:06:41	2019-12-08 14:06:41
3ba53f22-aafe-43e7-a7f9-f3c8b098ed6f	3ba53f22-aafe-43e7-a7f9-f3c8b098ed6f	2019-12-08 14:06:41	2019-12-08 14:06:41
\.


--
-- Data for Name: default_countries; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY public.default_countries (id, id_user, country, asset_url, name_asset, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2019_07_08_173535_table_default_countries	1
4	2019_08_28_121003_create_countries_table	1
5	2019_08_28_121402_create_assets_table	1
6	2019_08_28_122218_create_countries_assets	1
7	2019_08_29_072351_create_queries_table	1
8	2019_08_29_073124_create_queries_assets_table	1
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: queries; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY public.queries (id, user_id, name, type, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: queries_assets; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY public.queries_assets (query_id, asset_id, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: homestead
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: homestead
--

SELECT pg_catalog.setval('public.migrations_id_seq', 8, true);


--
-- Name: assets assets_pkey; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.assets
    ADD CONSTRAINT assets_pkey PRIMARY KEY (id);


--
-- Name: countries countries_country_code_unique; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.countries
    ADD CONSTRAINT countries_country_code_unique UNIQUE (country_code);


--
-- Name: countries countries_name_unique; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.countries
    ADD CONSTRAINT countries_name_unique UNIQUE (name);


--
-- Name: countries countries_pkey; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.countries
    ADD CONSTRAINT countries_pkey PRIMARY KEY (id);


--
-- Name: default_countries default_countries_id_user_unique; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.default_countries
    ADD CONSTRAINT default_countries_id_user_unique UNIQUE (id_user);


--
-- Name: default_countries default_countries_pkey; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.default_countries
    ADD CONSTRAINT default_countries_pkey PRIMARY KEY (id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: queries queries_pkey; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.queries
    ADD CONSTRAINT queries_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: homestead
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- Name: countries_assets countries_assets_asset_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.countries_assets
    ADD CONSTRAINT countries_assets_asset_id_foreign FOREIGN KEY (asset_id) REFERENCES public.assets(id);


--
-- Name: countries_assets countries_assets_country_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.countries_assets
    ADD CONSTRAINT countries_assets_country_id_foreign FOREIGN KEY (country_id) REFERENCES public.countries(id);


--
-- Name: default_countries default_countries_id_user_foreign; Type: FK CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.default_countries
    ADD CONSTRAINT default_countries_id_user_foreign FOREIGN KEY (id_user) REFERENCES public.users(id);


--
-- Name: queries_assets queries_assets_asset_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.queries_assets
    ADD CONSTRAINT queries_assets_asset_id_foreign FOREIGN KEY (asset_id) REFERENCES public.assets(id);


--
-- Name: queries_assets queries_assets_query_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: homestead
--

ALTER TABLE ONLY public.queries_assets
    ADD CONSTRAINT queries_assets_query_id_foreign FOREIGN KEY (query_id) REFERENCES public.queries(id);


--
-- PostgreSQL database dump complete
--


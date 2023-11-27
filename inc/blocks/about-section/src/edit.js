/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
	useBlockProps,
	RichText,
	MediaUpload,
	MediaUploadCheck,
} from "@wordpress/block-editor";
import { Button } from "@wordpress/components";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const {
		Heading,
		description,
		mediaID,
		mediaURL,
		Heading_top,
		mediaURL2,
		mediaID2,
	} = attributes;

	const onChangeHeading = (newHeading) => {
		setAttributes({ Heading: newHeading });
	};
	const onChangeHeadingtop = (newHeading) => {
		setAttributes({ Heading_top: newHeading });
	};
	const onChangeDescription = (newHeading) => {
		setAttributes({ description: newHeading });
	};
	const onSelectImage = (media) => {
		setAttributes({
			mediaURL: media.url,
			mediaID: media.id,
		});
	};
	const onSelectImage2 = (media) => {
		setAttributes({
			mediaURL: media.url,
			mediaID: media.id,
		});
	};
	const onRemovemedia = () => {
		setAttributes({
			mediaID: undefined,
		});
	};
	const onRemovemedia2 = () => {
		setAttributes({
			mediaID: undefined,
		});
	};
	return (
		<>
			<section id="about-section" {...useBlockProps()}>
				<div className="about-section">
					<div className="container p-0">
						<div className="about-section__inner">
							<div className="row">
								<div className="col-lg-6">
									<div className="about-section__inner_heading__top">
										<RichText
											tagName="h2"
											value={Heading_top}
											onChange={onChangeHeadingtop}
											placeholder={__("Enter banner text...", "walletup")}
										/>
									</div>
									<div className="col-lg-3">
										<div className="about-section__inner_img">
											<div className="col-lg-4">
												<MediaUploadCheck>
													<MediaUpload
														onSelect={onSelectImage}
														allowedTypes="image"
														value={mediaID}
														render={({ open }) => (
															<button onClick={open}>
																{!mediaID ? (
																	__("Upload Image")
																) : (
																	<img src={mediaURL} />
																)}
															</button>
														)}
													/>
												</MediaUploadCheck>
												<MediaUploadCheck>
													<Button onClick={onRemovemedia} isLink isDestructive>
														{__("remove image", "post-media-selector")}
													</Button>
												</MediaUploadCheck>
											</div>
										</div>
										<div className="col-lg-8">
											<div className="about-section__inner_heading">
												<RichText
													tagName="h4"
													value={Heading}
													onChange={onChangeHeading}
													placeholder={__("Enter banner text...", "walletup")}
												/>
											</div>
											<div className="about-section__inner_description">
												<RichText
													tagName="p"
													value={description}
													onChange={onChangeDescription}
													placeholder={__(
														"Enter banner description...",
														"walletup",
													)}
												/>
											</div>
										</div>
									</div>
								</div>
								<div className="col-lg-6">
									<div className="about-section__inner_img">
										<div className="col-lg-4">
											<MediaUploadCheck>
												<MediaUpload
													onSelect={onSelectImage2}
													allowedTypes="image"
													value={mediaID2}
													render={({ open }) => (
														<button onClick={open}>
															{!mediaID2 ? (
																__("Upload Image")
															) : (
																<img src={mediaURL2} />
															)}
														</button>
													)}
												/>
											</MediaUploadCheck>
											<MediaUploadCheck>
												<Button onClick={onRemovemedia2} isLink isDestructive>
													{__("remove image", "post-media-selector")}
												</Button>
											</MediaUploadCheck>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</>
	);
}
